
package atividade25.pkg09.matheus.fernando;

public class resultados {

    public static void main(String[] args) {
        Felino f1 = new Felino();
        f1.setnome("Leao");
        f1.setidade(13);
        f1.setcorpelo("amarelado");
        f1.setvelocidadeKM(45);
        
        f1.mostrarinformacao();
        System.out.println("----------------------------------------------------");
        
        Mamifero m1 = new Mamifero();
        m1.setnome("elefante");
        m1.setidade(47);
        m1.settempoGestacaoMeses(22);
        m1.setdieta("Herbivoro");
        
        m1.mostrarinformacao();
        System.out.println("----------------------------------------------------");
        
        Ave a1 = new Ave();
        a1.setnome("pardal");
        a1.setidade(2);
        a1.setbico("cone");
        a1.setpodeVoar(true);
        
        a1.mostrarinformacao();
        
    }
    
}
