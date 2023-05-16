import java.sql.SQLException;
import java.sql.Connection;
import java.sql.PreparedStatement;
import javax.swing.JOptionPane;

public class registrar {
    private conexion conexion;
    private ModeloDatos modelo;
    private Connection con;
     
    public registrar(){
        conexion = new conexion();
        modelo = new ModeloDatos();
    }
     
    public void insertar(String nombre, String descripcion, Float precio, int cantidad){
        PreparedStatement ps;
        String sql;
        modelo.setNombre(nombre);
        modelo.setDescripcion(descripcion);
        modelo.setPrecio(precio);
        modelo.setCantidad(cantidad);
        try{
            con = conexion.getConexion();
            sql = "insert into productos(nombre, descripcion, precio, cantidad) values(?,?,?,?)";
            ps = con.prepareStatement(sql);
            ps.setString(1, modelo.getNombre());
            ps.setString(2, modelo.getDescipcion());
            ps.setFloat(3, modelo.getPrecio());
            ps.setInt(3, modelo.getCantidad());
            ps.executeUpdate();
            JOptionPane.showMessageDialog(null, "Se han insertado los datos");
        }catch(SQLException e){
            JOptionPane.showMessageDialog(null, "Error de conexión:" + e.getMessage());
        }
    }
    registrar insert = new registrar();
    //insert.insertar();
}


