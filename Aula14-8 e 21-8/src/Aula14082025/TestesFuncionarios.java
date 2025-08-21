
package Aula14082025;

public class TestesFuncionarios {

    public static void main(String[] args) {
        Funcionario estagiario = new Funcionario();
        Funcionario Tecnico = new Funcionario();
        
        estagiario.Nome = "Matheus";
        estagiario.Salario = 1200;
        
        Tecnico.Nome = "Fabio";
        Tecnico.Salario = 2500;
        
        System.out.println("Nome do Estagiario: " + estagiario.Nome);
        System.out.println("Salario do Estagiario: " + estagiario.Salario);
        
        System.out.println("Nome do Tecnico: " + Tecnico.Nome);
        System.out.println("Salario do Tecnico: " + Tecnico.Salario);
        
        System.out.println("----------------ESPAÇO PARA OS METODOS-----------------------");
        
        estagiario.AumentaSalarioValor(200);
        Tecnico.AumentaSalarioPorcentagem(10);
        
        estagiario.ConsultarDados();
        Tecnico.ConsultarDados();
    }
    
}
