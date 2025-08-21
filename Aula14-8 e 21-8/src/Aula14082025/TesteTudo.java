
package Aula14082025;

public class TesteTudo {

    public static void main(String[] args) {
        Agencia a1 = new Agencia();
        Cliente c1 = new Cliente();
        Conta co1 = new Conta();
        CartaoDeCredito cdc1 = new CartaoDeCredito();
        
        c1.codigo = 1;
        c1.nome = "Matheus Fernando";
        a1.numero = 11;
        
        co1.numero = 1122;
        co1.saldo = 800;
        co1.limite = 600;
        
        cdc1.numero = 3344;
        cdc1.DataDeValidade = "01/11/2037";
        
        System.out.println("Agencia: " + a1.numero);
        System.out.println("Código Cliente: " + c1.codigo);
        System.out.println("Nome do Cliente: " + c1.nome);
        System.out.println("Numero da Conta: " + co1.numero);
        System.out.println("Saldo da Conta: " + co1.saldo);
        System.out.println("Limite da Conta: " + co1.limite);
        System.out.println("Numero do Cartão de Credito: " + cdc1.numero);
        System.out.println("Data de Validade do Cartão: " + cdc1.DataDeValidade);
    }
    
}
