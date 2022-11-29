public class Relogio {
    Ponteiros ponteiroHora = new Ponteiros();
    Ponteiros ponteiroMinuto =new Ponteiros();
    Ponteiros ponteiroSegundo = new Ponteiros();

    public void acertarRelogio(int hora, int minuto,
                               int segundo){

        hora=hora%12;

        ponteiroHora.posicao=hora;
        ponteiroMinuto.posicao=minuto/5;
        ponteiroSegundo.posicao=segundo/5;
    }

    public int lerHora(){
        return ponteiroHora.posicao;
    }
    public int lerMinuto(){
        return ponteiroMinuto.posicao;
    }
    public int lerSegundo(){
        return ponteiroSegundo.posicao;
    }


}
