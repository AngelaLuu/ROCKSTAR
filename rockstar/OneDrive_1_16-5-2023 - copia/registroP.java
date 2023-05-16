import java.util.Scanner;
import java.util.ArrayList;
import java.util.List;

class Product {
    private String name;
    private String description;
    private double price;
    private String category;

    public Product(String name, String description, double price, String category) {
        this.name = name;
        this.description = description;
        this.price = price;
        this.category = category;
    }

    public String getName() {
        return name;
    }

    public String getDescription() {
        return description;
    }

    public double getPrice() {
        return price;
    }

    public String getCategory() {
        return category;
    }
}

public class ProductRegistration {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        List<Product> products = new ArrayList<>();

        while (true) {
            System.out.println("----- Registro de Productos -----");
            System.out.println("1. Registrar nuevo producto");
            System.out.println("2. Mostrar productos registrados");
            System.out.println("3. Salir");
            System.out.print("Ingrese una opción: ");
            int option = scanner.nextInt();
            scanner.nextLine(); // Consume the newline character

            if (option == 1) {
                System.out.print("Nombre del producto: ");
                String name = scanner.nextLine();
                System.out.print("Descripción del producto: ");
                String description = scanner.nextLine();
                System.out.print("Precio del producto: ");
                double price = scanner.nextDouble();
                scanner.nextLine(); // Consume the newline character
                System.out.print("Categoría del producto: ");
                String category = scanner.nextLine();

                Product product = new Product(name, description, price, category);
                products.add(product);
                System.out.println("Producto registrado exitosamente.");
                System.out.println();
            } else if (option == 2) {
                if (products.isEmpty()) {
                    System.out.println("No hay productos registrados.");
                } else {
                    System.out.println("----- Productos Registrados -----");
                    for (Product product : products) {
                        System.out.println("Nombre: " + product.getName());
                        System.out.println("Descripción: " + product.getDescription());
                        System.out.println("Precio: $" + product.getPrice());
                        System.out.println("Categoría: " + product.getCategory());
                        System.out.println();
                    }
                }
            } else if (option == 3) {
                System.out.println("¡Hasta luego!");
                break;
            } else {
                System.out.println("Opción inválida. Por favor, intente de nuevo.");
            }
        }

        scanner.close();
    }
}
