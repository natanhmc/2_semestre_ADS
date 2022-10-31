public class Aplicacao {
    public static void main(String[] args) {
        Quadrado quad = new Quadrado();
        Circulo circ = new Circulo();
        Retangulo retan = new Retangulo();

        quad.lado = 9.0;
        quad.calcularArea();

        circ.raio=4.6;
        circ.calcularArea();

        retan.altura=3.8;
        retan.base = 2.1;
        retan.calcularArea();

    }
}
