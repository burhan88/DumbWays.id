import java.util.Scanner;

public class Main
{
  
public static void main (String[]args)
  {
    
int kembali;
    
Scanner keyboard = new Scanner (System.in);
    
System.out.print ("Masukkan Total Pembelian : ");
    
int pemb = keyboard.nextInt ();
    
System.out.print ("Masukkan Total Pembayaran : ");
    
int pemba = keyboard.nextInt ();
    
if (pemb >= 200000)
      {
	
int dis = pemb * 20 / 100;
	
int totdis = pemb - dis;
	
kembali = pemba - totdis;
	
System.out.println ("Kembalian: Rp " + kembali);
      
}
    else
      {
	
kembali = pemba - pemb;
	
System.out.println ("Kembalian: Rp " + kembali);
      
}
    
int a = kembali / 50000;
    
int b = (kembali - (a * 50000)) / 20000;
    
int c = (kembali - ((a * 50000) + (b * 20000))) / 10000;
    
int d = (kembali - ((a * 50000) + (b * 20000) + (c * 10000))) / 5000;
    
int e =
      (kembali -
       ((a * 50000) + (b * 20000) + (c * 10000) + (d * 5000))) / 2000;
    
System.out.println ("Lembar: Rp 50000 = " + a);
    
System.out.println ("Lembar: Rp 20000 = " + b);
    
System.out.println ("Lembar: Rp 10000 = " + c);
    
System.out.println ("Lembar: Rp 5000 = " + d);
    
System.out.println ("Lembar: Rp 2000 sebanyak  " + e + "  disumbangkan");

 
} 
}
