import java.sql.Connection;
import java.sql.DriverManager;

public class conexion {
    private static final String url="jdbc:mysql://localhost:3308/ROCK_STAR";
    private static final String usuario ="root";
    private static final String clave="";

    public static Connection Conexion() {
        Connection conex = null;

        try {
            Class.forName("com.mysq l.cj.jdbc.Driver");
            conex = DriverManager.getConnection(usuario, clave, url);

        } catch (Exception e){
            System.out.println("Error al conectar en la base de datos " + e.getMessage().toString());

        }
        return conex;

    }

    public Connection getConexion() {
        return null;
    }
}
