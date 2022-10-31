public class Aplicacao {
    public static void main(String[] args) {
        Automovel carro = new Automovel();
        Motocicleta moto = new Motocicleta();
        Onibus busao = new Onibus();

        System.out.println(carro.ligar());
        System.out.println(carro.isLigado(carro.ligado));
        System.out.println(carro.desligar());
        System.out.println(carro.isLigado(carro.ligado));

        System.out.println(moto.ligar());
        System.out.println(moto.isLigado(moto.ligado));
        System.out.println(moto.desligar());
        System.out.println(moto.isLigado(moto.ligado));

        System.out.println(busao.ligar());
        System.out.println(busao.isLigado(busao.ligado));
        System.out.println(busao.desligar());
        System.out.println(busao.isLigado(busao.ligado));


    }
}
