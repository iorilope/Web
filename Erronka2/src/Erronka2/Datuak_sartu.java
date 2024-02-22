package Erronka2;

import java.awt.BorderLayout;
import java.awt.Color;
import java.awt.Component;
import java.awt.Dimension;
import java.awt.FlowLayout;
import java.awt.Font;
import java.awt.GridLayout;
import java.awt.TextField;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.WindowAdapter;
import java.awt.event.WindowEvent;

import javax.swing.BorderFactory;
import javax.swing.JButton;
import javax.swing.JComboBox;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JTextArea;
import javax.swing.SwingConstants;
import javax.swing.UIManager;

public class Datuak_sartu {
	
	private static JLabel				aukera			= new JLabel("Klikatu zure aukeran",SwingConstants.CENTER);
	private static JFrame				frame 			= new JFrame("Hasiera");
	private static JButton				piraguistak		= new JButton("Piraguista taula");
	private static JButton				indibidualak	= new JButton("Lehiaketa indibidualak taula");
	private static JButton				taldeak			= new JButton("Talde lehiaketa taula");
	//Lehenengo frame-a eta bertako aldagaiak definitu
	private static JPanel				datuak			= new JPanel();
	private static JFrame 				frame2 			= new JFrame("Piraguista berriak taulan sartzeko aukera");
	private static JLabel				textnan			= new JLabel("Piraguistaren NAN-a");
	private static TextField 			nan				= new TextField("");
	private static JLabel				textizena		= new JLabel("Piraguistaren izena");
	private static TextField 			izena			= new TextField("");
	private static JLabel				textabizena		= new JLabel("Piraguistaren abizena");
	private static TextField 			abizena			= new TextField("");
	private static JLabel				textgeneroa		= new JLabel("Piraguistaren generoa");
	private static JComboBox<String>	generoaBox		= new JComboBox<String>();
	private static JLabel				texttelef		= new JLabel("Piraguistaren telefonoa");
	private static TextField			telefonoa		= new TextField("");
	private static JLabel				textherria		= new JLabel("Piraguistaren jatorrizko herria");
	private static TextField			herria			= new TextField("");
	private static JLabel				textaldea		= new JLabel("Piraguistaren talde kodea");
	private static TextField			talde_kodea 	= new TextField("");
	private static JLabel				textxapelketa	= new JLabel("Piraguistak egin dituen txapelketa kopurua");
	private static TextField			txapelketak		= new TextField("");

	//Bigarrengo frame-a eta bertako aldagaiak definitu
	
	private static JFrame				frame3 			= new JFrame("Lehiaketa indibidual berrien emaitzak sartzeko aukera");
	private static JLabel				textlehiakaria	= new JLabel("Piraguistaren Nan-a");
	private static TextField			piraguista_nan	= new TextField("");
	private static JLabel				textxapelkode	= new JLabel("Txapelketaren kodea");
	private static TextField			txapelketa_id	= new TextField("");
	private static JLabel				textdenbora		= new JLabel("Piraguistak egindako denbora");
	private static TextField			denbora			= new TextField("");
	//Hirugarren frame-a eta bertako aldagaiak definitu

	private static JFrame				frame4 					= new JFrame("Talde lehiaketa berrien emaitzak sartzeko aukera");
	private static JLabel				textaldetxapelketa		= new JLabel("Txapelketaren kodea");
	private static TextField			talde_txapelketa_id		= new TextField("");
	private static JLabel				textaldekod				= new JLabel("Taldearen kodea");
	private static TextField			taldekod				= new TextField("");
	private static JLabel				texttaldedenbora		= new JLabel("Taldeak egindako denbora");
	private static TextField			taldetxapdenbora		= new TextField("");
	//Laugarren frame-a eta bertako aldagaiak definitu
	private static JPanel				datubista		= new JPanel();
	private static JTextArea			erregistroa		= new JTextArea();
	private static JButton				datuaksartu		= new JButton("Datuak sartu");
	//Sartzen diren datuak ikusteko eta datu hauek sartzeko botoia definitu

	public static void elementuakjarri() {
		frame.getContentPane().add(aukera);
		frame.getContentPane().add(piraguistak);
		frame.getContentPane().add(indibidualak);
		frame.getContentPane().add(taldeak);
		//Lehenengo frame-ean botoiak sartu
		
		frame.setLayout(new FlowLayout());
		frame.setLayout(new GridLayout(4, 1));
		//Botoiak ikusgarri jarri eta tamaina eman
		
		frame.pack();
		frame.setVisible(true);
		frame.setSize(500,500);
		//frame-a ikusgai jarri eta tamaina eman
		
		frame.addWindowListener(new WindowAdapter()
		{
			public void windowClosing(WindowEvent e)
			{
				System.exit(0);
			}
		});
		//Frame-a ixtean programa guztia eteteko listener-a
		
		piraguistak.addActionListener(new ActionListener() {
			
			@Override
			public void actionPerformed(ActionEvent e) {
				
				frame.setVisible(false);
				frame2.setVisible(true);
				frame2.setLayout(new FlowLayout());
				frame2.setLayout(new GridLayout(2,1));
				frame2.setSize(600,300);
				datuak.setLayout(new GridLayout(16,1));
				//Bigarren frame-a ikusgarri jarri eta hurrengo textuak jartzeko moldatu
				
				datuak.add(textnan);
				datuak.add(nan);
				//Nan-a jartzeko textu kaxa jarri
				
				datuak.add(textizena);
				datuak.add(izena);
				//Izena jartzeko textu kaxa jarri
				
				datuak.add(textabizena);
				datuak.add(abizena);
				//Abizena jartzeko textu kaxa jarri
				
				datuak.add(textgeneroa);
				datuak.add(generoaBox);
				generoaBox.addItem("G");
				generoaBox.addItem("E");
				//Generoa jartzeko aukera kaxa jarri eta aukerak gehitu
				
				datuak.add(texttelef);
				datuak.add(telefonoa);
				//Telefonoa jartzeko textu kaxa jarri
		
				datuak.add(textherria);
				datuak.add(herria);
				//Herria jartzeko textu kaxa jarri
				
				datuak.add(textaldea);
				datuak.add(talde_kodea);
				//Taldea jartzeko textu kaxa jarri
				
				datuak.add(textxapelketa);
				datuak.add(txapelketak);
				//Txapelketa kantitatea jartzeko textu kaxa jarri
				
				frame2.add(datuak);
				//Datuak panela frame-an gehitu
				
				datubista.setLayout(new GridLayout(1,2));
				
				datubista.add(erregistroa);
				//Sartzen diren datuak ikusteko tokia gehitu
				
				datubista.add(datuaksartu);
				//Datuak sartzeko botoia gehitu
				
				frame2.add(datubista);
				//Datubista panela frame-an gehitu
				
				frame2.pack();
				//Frame-ari tamaina eman
				
				frame2.addWindowListener(new WindowAdapter()
				{
					public void windowClosing(WindowEvent e)
					{
						System.exit(0);
					}
				});
				//Frame-a ixtean programa guztia eteteko listener-a
				
				datuaksartu.addActionListener(new ActionListener() {
					String textuerregistroa="Nan"+"\t"+"Izena"+"\t"+"Abizena"+"\t"+"Generoa"+"\t"+"Telefonoa"+"\t"+"Herria"+"\t"+"Talde Kodea"+"\t"+"Txapelketa Kopurua"+"\n";
					@Override
					public void actionPerformed(ActionEvent e) {
						
						textuerregistroa += nan.getText()+"\t";
						nan.setText(null);
						//Nan kutxan gorde den datua hartu eta textu kutxa garbitu
						
						textuerregistroa += izena.getText()+"\t";
						izena.setText(null);
						//Izenea kutxan gorde den datua hartu eta textu kutxa garbitu
						
						textuerregistroa += abizena.getText()+"\t";
						abizena.setText(null);
						//Abizena kutxan gorde den datua hartu eta textu kutxa garbitu
						
						textuerregistroa += generoaBox.getSelectedItem().toString()+"\t";
						//Aukeratu den generoa gorde
						
						textuerregistroa += telefonoa.getText()+"\t";
						telefonoa.setText(null);
						//Telefono kutxan gorde den datua hartu eta textu kutxa garbitu
						
						textuerregistroa += herria.getText()+"\t";
						herria.setText(null);
						//Herria kutxan gorde den datua hartu eta textu kutxa garbitu
						
						textuerregistroa += talde_kodea.getText()+"\t";
						talde_kodea.setText(null);
						//Talde_kodea kutxan gorde den datua hartu eta textu kutxa garbitu
						
						textuerregistroa += txapelketak.getText()+"\t"+"\n";
						txapelketak.setText(null);
						//Txapelketak kutxan gorde den datua hartu eta textu kutxa garbitu
						
						erregistroa.setText(textuerregistroa);
						//Erregistroa textu area eguneratu gorde ditugun datuekin
						
					}
				});
			}
		});
		
		
		indibidualak.addActionListener(new ActionListener() {
			
			@Override
			public void actionPerformed(ActionEvent e) {
				
				frame.setVisible(false);
				frame3.setVisible(true);
				frame3.setLayout(new FlowLayout());
				frame3.setLayout(new GridLayout(2,1));
				frame3.setSize(600,300);
				datuak.setLayout(new GridLayout(6,1));
				//Hirugarren frame-a ikusgarri jarri eta hurrengo textuak jartzeko moldatu
				
				datuak.add(textlehiakaria);
				datuak.add(piraguista_nan);
				//Lehiakariaren Nan-a jartzeko textu kaxa jarri
				
				datuak.add(textxapelkode);
				datuak.add(txapelketa_id);
				//Txapelketaren kodea jartzeko textu kaxa jarri
				
				datuak.add(textdenbora);
				datuak.add(denbora);
				//Piraguistak txapelketan egindako denbora jartzeko textu kaxa jarri
				frame3.add(datuak);
				
				datubista.setLayout(new GridLayout(1,2));
				
				datubista.add(erregistroa);
				//Sartzen diren datuak ikusteko tokia gehitu
				
				datubista.add(datuaksartu);
				//Datuak sartzeko botoia gehitu
				
				frame3.add(datubista);
				frame3.pack();
				//Frame-ari tamaina eman
				
				frame3.addWindowListener(new WindowAdapter()
				{
					public void windowClosing(WindowEvent e)
					{
						System.exit(0);
					}
				});
				//Frame-a ixtean programa guztia eteteko listener-a
				
				datuaksartu.addActionListener(new ActionListener() {
					String textuerregistroa="";
					@Override
					public void actionPerformed(ActionEvent e) {
						
						textuerregistroa += piraguista_nan.getText()+"\t";
						piraguista_nan.setText(null);
						
						textuerregistroa += txapelketa_id.getText()+"\t";
						txapelketa_id.setText(null);
						
						textuerregistroa += denbora.getText()+"\n";
						denbora.setText(null);
						
						erregistroa.setText(textuerregistroa);
						//Erregistroa textu area eguneratu gorde ditugun datuekin
						
					}
				});
			}
			
		
		});
		
		taldeak.addActionListener(new ActionListener() {

			@Override
			public void actionPerformed(ActionEvent e) {

				frame.setVisible(false);
				frame4.setVisible(true);
				frame4.setLayout(new FlowLayout());
				frame4.setLayout(new GridLayout(5,0));
				//Laugarren frame-a ikusgarri jarri eta hurrengo textuak jartzeko moldatu

				frame4.getContentPane().add(textaldetxapelketa);
				frame4.getContentPane().add(talde_txapelketa_id);
				//Txapelketaren kodea jartzeko textu kaxa jarri

				frame4.getContentPane().add(textaldekod);
				frame4.getContentPane().add(taldekod);
				//Taldearen kodea jartzeko textu kaxa jarri

				frame4.getContentPane().add(texttaldedenbora);
				frame4.getContentPane().add(taldetxapdenbora);
				//Taldeak txapelketan egindako denbora jartzeko textu kaxa jarri
				
				frame4.getContentPane().add(erregistroa);
				//Sartzen diren datuak ikusteko tokia gehitu
				
				frame4.getContentPane().add(datuaksartu);
				//Datuak sartzeko botoia gehitu

				frame4.pack();
				frame4.setSize(500,500);
				//Frame-ari tamaina eman

				frame4.addWindowListener(new WindowAdapter()
				{
					public void windowClosing(WindowEvent e)
					{
						System.exit(0);
					}
				});
				//Frame-a ixtean programa guztia eteteko listener-a
				
				datuaksartu.addActionListener(new ActionListener() {
					String textuerregistroa="";
					@Override
					public void actionPerformed(ActionEvent e) {
						
						textuerregistroa += talde_txapelketa_id.getText()+"\t";
						talde_txapelketa_id.setText(null);
						
						textuerregistroa += taldekod.getText()+"\t";
						taldekod.setText(null);
						
						textuerregistroa += taldetxapdenbora.getText()+"\n";
						taldetxapdenbora.setText(null);
						
						erregistroa.setText(textuerregistroa);
						//Erregistroa textu area eguneratu gorde ditugun datuekin
						
					}
				});
			}


		});
	}

	public static void main(String[] args) {
		{
			try
			{
				UIManager.setLookAndFeel(UIManager.getCrossPlatformLookAndFeelClassName());
			} 
			catch (Exception e)
			{
			}
			elementuakjarri();
		}
		//Metodoari deitzen zaio
	}	

}
