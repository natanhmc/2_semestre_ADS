public class Aplicacao {
    public static void main(String[] args) {
        Triangulo tri = new Triangulo();
        tri.altura = 4;
        tri.base = 2.5;
        System.out.println("A area do triangulo e: " +tri.calcularArea());


        Quadrado quad = new Quadrado();
        quad.lado=3.2;
        System.out.println("A area do quadrado e: " +quad.calcularArea());

        Circunferencia circ = new Circunferencia();
        circ.raio=5;
        System.out.println("A area da circunferencia e: "+circ.calcularArea());

        Trapezio trap = new Trapezio();
        trap.baseMenor=3.6;
        trap.baseMaior=7.1;
        trap.altura=2;
        System.out.println("A area do trapezio e: "+trap.calcularArea());
    }
}
