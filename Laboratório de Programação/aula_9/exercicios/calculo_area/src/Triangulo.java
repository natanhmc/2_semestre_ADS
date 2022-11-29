public class Triangulo {
    public double altura;
    public double base;
    public double Area;

    public double calcularArea(){
        this.Area = (this.base*this.altura)/2;
        return Area;
    }
}