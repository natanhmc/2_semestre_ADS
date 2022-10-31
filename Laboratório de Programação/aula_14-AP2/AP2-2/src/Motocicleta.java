public class Motocicleta extends Veiculo{
    boolean ligado;

    @Override
    public String ligar() {
        ligado = true;
        return "Moto ligada!!";
    }
    public String desligar(){
        ligado = false;
        return "Moto desligada!!";
    }
}
