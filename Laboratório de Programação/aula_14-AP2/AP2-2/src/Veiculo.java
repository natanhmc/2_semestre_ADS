public class Veiculo {

    public String ligar(){

        return "Ligado!!";
    }
    public String desligar(){
        return "Desligado!!";
    }
    public String isLigado(boolean teste){
        if(teste){
            return "Ligado!!!\n";
        }else{
            return "Desligado!!!\n";
        }
    }
}
