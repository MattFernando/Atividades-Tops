
package Aula14082025;

public class TesteCliente {

    public static void main(String[] args) {
        Cliente c1 = new Cliente();
        c1.codigo = 1;
        c1.nome = "Matheus Fernando";
        
        Cliente c2 = new Cliente();
        c2.codigo = 2;
        c2.nome = "Carlinhos Amauri";
        
        
        System.out.println(c1.codigo);
        System.out.println(c1.nome);
        
        System.out.println(c2.codigo);
        System.out.println(c2.nome);
    }
    
}
