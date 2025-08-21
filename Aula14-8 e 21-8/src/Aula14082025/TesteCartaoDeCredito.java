
package Aula14082025;

public class TesteCartaoDeCredito {

    public static void main(String[] args) {
        CartaoDeCredito cdc1 = new CartaoDeCredito();
        
        cdc1.numero = 1122;
        cdc1.DataDeValidade = "01/12/2033";
        
        CartaoDeCredito cdc2 = new CartaoDeCredito();
        cdc2.numero = 3344;
        cdc2.DataDeValidade = "21/09/2041";
        
        System.out.println(cdc1.numero);
        System.out.println(cdc1.DataDeValidade);
        
        System.out.println(cdc2.numero);
        System.out.println(cdc2.DataDeValidade);
    }
    
}
