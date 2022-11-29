public class Circunferencia {
    public double raio;
    public double Area;

    public double calcularArea(){
        this.Area = Math.PI*raio*raio;
        return Area;
    }
}
