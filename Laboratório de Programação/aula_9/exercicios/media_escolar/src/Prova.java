public class Prova {
    public double parte1;
    public double parte2;
    public double total;

    public double notaTotal(double p1,double p2){
        total = p1+p2;
        if (this.total>10){
            return 10;
        }
        return total;
    }



}
