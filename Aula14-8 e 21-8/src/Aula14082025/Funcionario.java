
package Aula14082025;

public class Funcionario {
    String Nome;
    double Salario;
    
    void AumentaSalarioValor(double valor){
        this.Salario += valor;
    }
    double AumentaSalarioPorcentagem(double valor){
        return this.Salario = this.Salario + (this.Salario * (valor/100));
    }
    
    void ConsultarDados(){
        System.out.println("Nome do Funcionario: " + this.Nome);
        System.out.println("Salario Atual do Funcionario: " + this.Salario);
    }
}
