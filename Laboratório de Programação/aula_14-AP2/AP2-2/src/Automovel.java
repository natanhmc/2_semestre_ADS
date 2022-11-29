public class Automovel extends Veiculo{
    boolean ligado;

    public String ligar(){
        ligado = true;
        return "Carro ligado";
    }
    public String desligar(){
        ligado = false;
        return "Carro desligado";
    }
}
