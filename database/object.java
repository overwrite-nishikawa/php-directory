p.8
自分で考えてみよう
◯自社のアプリケーションのコードを変更しなければいけなくなった理由は？
コードを変更することで速度改善などより良くできる機能の言語のバージョンが出た場合。

p.14
◯アプリにロケット動力の飛ぶ振る舞いを追加する必要がある場合にどうするか？
答え FlyBehaviorインターフェイスを実装する

◯鳴く振る舞いを使用したクラスで、カモ以外のクラスが思いつきますか？
犬,

答え 1つの例は、鳴笛(カモの鳴き声を発する装置)です。

public abstract class Duck {
    FlyBehavior quackBehavior;
    quackBehavior quackBehavior;
    public Duck() {
    }

    public abstract void display();

    public void performFly() {
        FlyBehavior.fly();
    }

    public void performQuack() {
        quackBehavior.quack();
    }

    public void swim() {
        system.out.printIn('すべてのカモは浮きます。おとりのカモでも！')
    }
}

class  Charcters() {
    flight()
}