
public class Test {
	public static void main(String[]args){
		
		Person taro = new Person();
		taro.name="山田太郎";
		taro.age=20;
		taro.phoneNumber="090-7354-4973";
		taro.address="taro@gmail.com";
		
		Person ziro = new Person();
		ziro.name="木村次郎";
		ziro.age=18;
		ziro.phoneNumber="090-5284-8565";
		ziro.address="ziro@gmail.com";
		
		Person hanako = new Person();
		hanako.name="鈴木花子";
		hanako.age=16;
		hanako.phoneNumber="090-6362-6347";
		hanako.address="hanako@gmail.com";
		
		Person kane = new Person();
		kane.name="大山金将";
		kane.age=24;
		kane.phoneNumber="090-6384-8365";
		kane.address="kane@gmail.com";
		
		System.out.println(taro.name);
		System.out.println(taro.age);
		System.out.println(taro.phoneNumber);
		System.out.println(taro.address);
		taro.talk();
		taro.walk();
		taro.run();
		
		System.out.println(ziro.name);
		System.out.println(ziro.age);
		System.out.println(ziro.phoneNumber);
		System.out.println(ziro.address);
		ziro.talk();
		ziro.walk();
		ziro.run();
		
		System.out.println(hanako.name);
		System.out.println(hanako.age);
		System.out.println(hanako.phoneNumber);
		System.out.println(hanako.address);
		hanako.talk();
		hanako.walk();
		hanako.run();
		
		System.out.println(kane.name);
		System.out.println(kane.age);
		System.out.println(kane.phoneNumber);
		System.out.println(kane.address);
		kane.talk();
		kane.walk();
		kane.run();
		
		
		Robot aibo = new Robot();
		aibo.name="aibo";
		Robot asimo = new Robot();
		asimo.name="asimo";
		Robot pepper = new Robot();
		pepper.name="pepper";
		
		aibo.talk();
		aibo.walk();
		aibo.run();
		
		asimo.talk();
		asimo.walk();
		asimo.run();
		
		pepper.talk();
		pepper.walk();
		pepper.run();
	}

}
