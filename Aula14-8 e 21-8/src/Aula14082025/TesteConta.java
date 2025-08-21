
package Aula14082025;

public class TesteConta {

    public static void main(String[] args) {
        Conta c1 = new Conta();
        
        
        c1.limite = 600;
        c1.saldo = 180;
        c1.numero = 11;
        
        Conta c2 = new Conta();
        
        
        c2.limite = 1200;
        c2.saldo = 360;
        c2.numero = 22;
        
        System.out.println(c1.saldo);
        System.out.println(c1.limite);
        System.out.println(c1.numero);
        System.out.println(c2.saldo);
        System.out.println(c2.limite);
        System.out.println(c2.numero);    }
    
}
