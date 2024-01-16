<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD>
 <TITLE>
  MOCM - Metro Olografix Crypto Meeting
 </TITLE>
 <LINK rel=stylesheet href="cryptomeeting.css" type="text/css">
 <META name="authors" content="nda & sdv">
 <META name="generator" content="plain text ;)">
 <META HTTP-EQUIV="keywords" name="keywords" content="metro, olografix, metro olografix, 
 Metro Olografix, #olografix, computer, internet, Pescara, pescara, PESCARA, incontro, convegno,
 telematica, cultura, Andrea Monti, Stefano Chiccarelli, Andrea Monti, Alessio Sclocco, neuro, isazi, amonti, 
 crittografia, criptografia, crypto, sikurezza, firma digitale, Zimuel, Giustozzi, Kobayashi, s0ftpj, Crypt Rebels,
 mocm, MOCM, meeting, MEETING, crittazione, cifratura, decrittazione, decifratura, PGP, GPG">
</HEAD>

<?

 $filename="presenti";

        function writepeople($file, $nome, $luogo, $keyid){

                ignore_user_abort(true);
                $handle = fopen("$file", "a+b"); 

                if($handle){
                        if (flock($handle, LOCK_EX)){
                                $people = fwrite($handle, "$nome, $luogo, $keyid<BR>\n") || die("Error writing: unable to write file."); 
                                flock($handle, LOCK_UN);
                        } else print("Lock error: unable to open file.");
                } else print("File error: unable to open file."); 

                fclose($handle);
                ignore_user_abort(false);

        }

?>

<BODY bgcolor="#FFFFFF" text="#000000">
 <TABLE width=723 cellspacing=0 cellpadding="0" border=0>
  <TR><TD width="100%" height="15" colspan=3>&nbsp;</TD></TR>
  <TR><TD width="100%" height="64" colspan=3>
   <IMG src="../moimg/testatany.gif" width="723" height="64" alt="metro olografix org" border=0 usemap="#testata" ismap>
  </TD></TR>
  <TR><TD width="100%" height="5" colspan=3>&nbsp;</TD></TR>  
  <TR><TD width="100%" height="142" colspan=3>
   <IMG src="../moimg/mocmtitb.gif" width="561" height="96" alt="mx crypto meeting" border=0>
  </TD></TR>
  <TR><TD width="100%" height=20 colspan=3>&nbsp;</TD></TR>
  <TR>
   <TD width=125>&nbsp;</TD>
   <TD width=540>
<H2>MOCM - Metro Olografix Crypto Meeting</H2>
<P><a href="#pres">Presentazione</a> | <a href="#prog">Programma</a> | <a href="#regi">Registrazione</a> | <a href="#mocm">MOCM Keysigning party How-To</a><BR> <a href="#arriv">Come arrivare</a> <!-- link rassegnastampa <a href="#rasstampa">Rassegna stampa</a> !--></P>
<BR><BR>
<P><a name="pres"><STRONG>PRESENTAZIONE</STRONG></A></P>
<P><I>"E' veramente da porre in dubbio <br>
che l'intelligenza umana possa creare <br>
un enigma di questa specie <br>
che poi l'ingegno umano con l'applicazione necessaria <br>
non riesca a spiegare". </I><br>
Edgar Allan Poe, &quot;Lo scarabeo d'oro&quot;</P>
<BR><BR>
<P>Cos'&egrave; la crittografia? Come funziona? Perche' usarla? Quali sono i pro e i contro ? E' legale oppure no? <BR>
Questi e tanti altri argomenti saranno affrontati in un convegno organizzato dall'Associazione Culturale Telematica <a href="http://www.olografix.org">&quot;Metro Olografix&quot;</A> il 20 settembre a Pescara, presso la sala consiliare della Provincia, in Piazza Italia n.1. </P>
<P>Un incontro suddiviso in due precisi momenti, l'uno teorico (la crittografia nelle nostre vite, moderatore della discussione l'avv. <a href="http://www.andreamonti.net" target="amonti">Andrea Monti</A>), l'altro pratico (Hands On, moderatore Igor &quot;Kobaiashi&quot; Falcomat&agrave; di <a href="http://www.sikurezza.org/" target="sikurezza.org">sikurezza.org</A>) per cercare di offrire un panorama quanto pi&ugrave; ampio possibile. </P>
<P>Parallelamente al convegno si svolger&agrave; un key-signing party per il cui regolamento &egrave; possibile leggere qualche nota dopo il programma della manifestazione. Durante tutta la giornata sar&agrave; disponibile un banchetto dove partecipare al key-signing party e ottenere informazioni e software crittografico. </P>
<BR><BR><BR>
  <P><a name="prog"><STRONG>PROGRAMMA DELL'EVENTO:</STRONG></A></P>
<UL> 
<LI> 09.00 Preparazione del keysigning party<BR>
<LI> 09.45 Apertura e saluti Stefano &quot;NeURo&quot; Chiccarelli e Alessio &quot;isazi&quot; Sclocco (Metro Olografix) <BR><BR>
</UL>
<BLOCKQUOTE><P><STRONG>[La crittografia nelle nostre vite]</STRONG> &nbsp;Moderatore Avv. Andrea Monti (Metro Olografix)</P></BLOCKQUOTE>
<UL>
<LI> 10.00 Cos'e' la crittografia - <a href="http://www.nightgaunt.org/" target="Giustozzi">Corrado Giustozzi</A><BR>
<LI> 10.45 Le basi matematiche - Prof. Norberto Gavioli (<a href="http://www.univaq.it" target="univaq">Universit&agrave; de L'Aquila</A>)<BR> 
<LI> 11.30 La visione della PolTel - <a href="http://www.criminologia.org" target="criminologia">Marco Strano</A> (Polizia delle Telecomunicazioni) <BR>
<LI> 12.15 Gli aspetti legali - <a href="http://www.iclc.org/" target="iclc">Avv. Giovanni Ziccardi</A> (Universit&agrave; di Milano) <BR>
<LI> 12.45 Domande <BR>
<LI> 13.30 Pausa pranzo<BR>
</UL>
<BLOCKQUOTE><P><STRONG>[Hands On]</STRONG> &nbsp;Moderatore Igor &quot;Kobaiashi&quot; Falcomata' (sikurezza.org)</P></BLOCKQUOTE>
<UL>
<LI> 15.00 Introduzione alla parte tecnica - Igor &quot;Kobaiashi&quot; Falcomata' (<a href="http://www.sikurezza.org/" target="sikurezza.org">sikurezza.org</A>) <BR> 
<LI> 15.15 Firma digitale e problemi di sicurezza - Stefano &quot;Raistlin&quot; Zanero (<a href="http://www.s0ftpj.org" target="s0ftpj">s0ftpj</A>) <br>
<LI> 16.00 Il progetto GnuPG e la crittografia Open Source - <a href="http://www.enricozimuel.net" target="zimuel">Enrico Zimuel</A> (Metro Olografix)<br>
<LI> 16.45 Nuovi progetti di steganografia - Claudio &quot;vecna&quot; Agosti (<a href="http://www.s0ftpj.org" target="s0ftpj">s0ftpj</A>) 
<LI> 17.30 Client di posta - Paranoy Lesion (<a href="http://www.cryptorebels.net/" target="cryptorebels">Crypto Rebels</A>) <br>
<LI> 18.15 Saluti
</UL>
<BR><BR><BR>
<!-- Sezione registrazione on line!-->
<P><a name="regi"><STRONG>REGISTRAZIONE</STRONG></A></P>
<P>Dai il tuo contributo all'organizzazione dell'evento riempiendo la form seguente, sar&agrave sufficiente fornire il
nome, la provenienza ed eventuali note (come ad esempio il numero di persone con cui si ha intenzione di partecipare
all'evento) per aiutarci in maniera significativa.</P>
<? 
   if(isset($HTTP_POST_VARS['submit'])){
   	$fnome = $HTTP_POST_VARS['nome'];
        $fluogo = $HTTP_POST_VARS['luogo'];
        $fnote = $HTTP_POST_VARS['note'];

        writepeople("$filename", "$fnome", "$fluogo", "$fnote");
        print("<P>Grazie per aver contribuito all'organizzazione dell'evento.</P>");
   }
?>

<FORM action="<? echo $PHP_SELF ;?>" method="POST">
  <TABLE>
  <TR><TD><P>Nome o nick</P></TD><TD><INPUT type="text" name="nome"></TD></TR>
  <TR><TD><P>Provenienza</P></TD><TD><INPUT type="text" name="luogo"></TD></TR>
  <TR><TD><P>Addendum</P></TD><TD><INPUT type="text" name="note"><TD></TR>
  <TR><TD><BR></TD></TR>
  <TR><TD><INPUT type="submit" name="submit" value="Registrati"></TD>
  <TD><INPUT type="reset" name="reset" value="Reset"></TD></TR>
  </TABLE>
</FORM>
<BR><BR><BR>

<P><STRONG><a name="mocm">MOCM KEYSIGNING PARTY HOW-TO</A></STRONG></P>
<P>Le linee guida generali sono disponibili, in inglese, al seguente indirizzo:<br>
<a href="http://www.cryptnet.net/fdp/crypto/gpg-party.html">http://www.cryptnet.net/fdp/crypto/gpg-party.html</a><BR><BR>
Il keysigning party durante il MOCM avr&agrave; per&ograve; qualche particolarit&agrave; rispetto alle linee guida del precedente documento. All'ingresso della sala dei marmi sar&agrave; presente un banchetto dove prelevare un cd contenente documentazione e software crittografico, a questo stesso banchetto sar&agrave; possibile registrarsi per il keysigning party; all'atto della registrazione vi verr&agrave;  rilasciato un badge con il vostro id e il fingerprint della vostra chiave. Inoltre riceverete un foglio con l'elenco delle chiavi dei partecipanti al party, star&agrave; a voi adesso conoscere gli altri &quot;portatori di badge&quot; e verificare che i fingerprint corrispondano. Naturalmente riceverete assieme a foglio e badge un caff&egrave; :)</P>       
<P>Se non avete inviato la vostra chiave potete chiedere al responsabile del banchetto di scaricarla da internet, a questo punto dovrete dimostrare che la chiave sia proprio la vostra e continuare come al punto precente.</P>
<P>Se non avete una chiave gpg, bhe potete informarvi su come crearla e comunque avere il foglio con le chiavi degli altri partecipanti che, una volta venuti a conoscenza dell'identit&agrave; dei proprietari, potrete firmare con la chiave che genererete una volta tornati a casa.</P>,
<BR><BR><P><STRONG><a name="arriv">COME ARRIVARE</A></STRONG></P><P>In Automobile:</P><P><a href="http://mappe.virgilio.it/tcol/mappa.jsp?com1=citta'+sant'angelo+(pe)&amp;to1=a14&amp;civ1=&amp;com2=pescara+(pe)&amp;to2=piazza+italia&amp;civ2=1&amp;cx=14.17094&amp;cy=42.48949&amp;lx=14.1277&amp;ly=42.51445&amp;ex=14.21419&amp;ey=42.46453&amp;z=6.8&amp;rtg=C" target="_new">Uscita Autostrada A14 Pescara Nord / Citt&agrave; S.Angelo </A></P><P><a href="http://mappe.virgilio.it/tcol/mappa.jsp?com1=spoltore+(pe)&amp;to1=a25&amp;civ1=&amp;com2=pescara+(pe)&amp;to2=piazza+italia&amp;civ2=1&amp;cx=14.18051&amp;cy=42.43783&amp;lx=14.14683&amp;ly=42.41114&amp;ex=14.21419&amp;ey=42.46453&amp;z=5.91&amp;rtg=C" target="_news"> Uscita Autostrada A25 Pescara / Villanova</A></P><P><a href="http://mappe.virgilio.it/tcol/mappa.jsp?com1=francavilla+al+mare+(ch)&amp;to1=a14&amp;civ1=&amp;com2=pescara+(pe)&amp;to2=piazza+italia&amp;civ2=1&amp;cx=14.2384&amp;cy=42.4389&amp;lx=14.26262&amp;ly=42.41327&amp;ex=14.21419&amp;ey=42.46453&amp;z=5.67&amp;rtg=C" target="_new"> Uscita Autostrada A14 Pescara Sud / Francavilla</A> </P>
<P>In treno: </p>
<P> <a href="http://mappe.virgilio.it/tcol/mappa.jsp?com1=pescara+(pe)&amp;to1=via+enzo+ferrari&amp;civ1=1&amp;com2=pescara+(pe)&amp;to2=piazza+italia&amp;civ2=1&amp;cx=14.20925&amp;cy=42.46562&amp;lx=14.20431&amp;ly=42.46672&amp;ex=14.21419&amp;ey=42.46453&amp;z=0.82&amp;rtg=C" target="new">dalla Stazione Centrale</A></P>
<BR><BR>
<P>Per ulteriori informazioni o per inviare la chiave pubblica con cui partecipare al key-signign party scrivere a <a href="mailto:cryptomeeting@olografix.org">cryptomeeting@olografix.org</a></p>
<P>Per informazioni sull'associazione culturale telematica Metro Olografix consigliamo la lettura delle <A HREF="http://www.olografix.org/chisiamo.html">pagine web relative</A>.</P>
<BR><BR>
    <!-- titolo eventuale rassegna stampa <P><a name="rasstampa"><STRONG>RASSEGNA STAMPA</STRONG></A></P>  !-->
<!-- esempio paragrafo link <P>
<a href="url1" target="nome1">titolo1</A><BR>
<a href="url2" target="nome2">titolo2</A><BR>
</P>
<BR> fine esempio paragrafo link !-->
   <HR width=540 noshade>
   </TD>
   <TD width=58>&nbsp;</TD>
  </TR>
  <TR>
   <TD width=125 valign=top>
    <A HREF="http://www.olografix.org/"><IMG src="../moimg/mx.gif" width="123" height="64" border="0" alt="mx"></A>
   </TD>
   <TD width=598 colspan=2>
    <!-- barra links testuali !-->
    <P><A href="../chisiamo.html" OnMouseOver="window.status='cosa &egrave; e da chi &egrave; composta Metro Olografix'; return true">chi siamo?</A> &#124; <A href="../eventi.html" OnMouseOver="window.status='gli eventi di Metro Olografix'; return true">gli eventi</A> &#124; <A href="../associati.html" OnMouseOver="window.status='come associarsi a Metro Olografix'; return true">associati!</A> &#124; <A href="../mappa.html" OnMouseOver="window.status='mappa del sito di Metro Olografix'; return true">mappa del sito</A> &#124; <A href="../index.html" OnMouseOver="window.status='home page di Metro Olografix'; return true">home</A></P>
    <!-- credits !-->
    <ADDRESS>
     &nbsp; &nbsp; http://www.olografix.org/cryptomeeting/index.html :: aggiornato al 9 settembre 2003<BR>
     &nbsp; &nbsp; Metro Olografix ACT 2003 :: copyright dei rispettivi detentori<BR>
     &nbsp; &nbsp; sito a cura di .nezmar. e ah:pook :: contact: <A href="mailto:info@olografix.org">info@olografix.org</A><BR>
     <BR>
     &nbsp; &nbsp; &nbsp; <A href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.olografix.org%2Fcryptomeeting%2Findex.php"
target="new1"><IMG src="../moimg/vh401.gif" width=88 height=31 alt="Valid HTML 4.01!" border=0></A> 
     &nbsp; &nbsp; &nbsp; <A
href="http://jigsaw.w3.org/css-validator/validator?uri=www.olografix.org%2Fcryptomeeting%2Fcryptomeeting.css" target="new2"><IMG
src="../moimg/vcss.gif" width=88 height=31 alt="Valid CSS!" border=0></A>
    </ADDRESS>
   </TD>
  </TR> 
 </TABLE>
    


<MAP Name="testata">
<AREA Shape="POLY" coords = "687,9,691,16,691,20,697,28,696,32,699,37,699,38,693,43,688,40,683,41,680,43,670,40,670,35,672,32,674,31,677,23,680,19,678,11,684,8,687,9,689,11,691,14" HREF="../soci.html" OnMouseOver="window.status='*';" alt="soci" target="anybody">
<AREA Shape="Rect" coords = "611,46,701,56"  HREF="../soci.html" OnMouseOver="window.status='*'; return true" alt="linux.org" target="anybody">
<AREA Shape="Rect" coords = "129,27,266,38"  HREF="mailto:info@olografix.org" alt="info@olografix.org">
<AREA Shape="Rect" coords = "86,7,266,20"  HREF="http://www.olografix.org" alt="olografix.org">
<AREA Shape="POLY" coords = "6,2,72,2,78,10,78,27,83,28,89,38,100,39,107,29,113,27,121,30,116,35,111,40,110,46,113,51,120,57,120,60,115,63,109,61,100,51,94,51,90,52,83,60,80,63,73,62,69,57,78,50,80,45,79,40,74,35,69,32,69,17,67,11,57,10,47,12,44,15,45,29,43,33,39,34,36,29,35,25,36,14,33,10,30,11,24,17,17,18,13,20,13,29,10,34,7,34,5,30,5,6,8,1" HREF="http://www.olografix.org" alt="http://www.olografix.org" OnMouseOver="window.status='home page di Metro Olografix'; return true">
</MAP>
</BODY>
</HTML>
