public class Retangulo implements AreaCalculavel{
    public double base;
    public double altura;
    @Override
    public void calcularArea() {
        System.out.println("a area do retangulo e: "+base * altura);
    }
}
