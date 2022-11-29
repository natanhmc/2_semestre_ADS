public class Onibus extends Veiculo{
    boolean ligado;

    @Override
    public String ligar() {
        ligado = true;
        return "Onibus ligado!!";
    }
    public String desligar(){
        ligado = false;
        return "Onibus desligado!!";
    }
}
