public class ponto3d extends ponto2d{
    double z;
    public ponto3d(double x, double y,double z){
        super(x,y);
        this.z = z;

    }
    public String toString(){

        return super.toString()+" , Z = "+z;
    }
}
