public class Circulo implements AreaCalculavel {
    public double raio;
    @Override
    public void calcularArea() {
        System.out.println("a area do circulo e: "+Math.PI * raio * raio);
    }
}
