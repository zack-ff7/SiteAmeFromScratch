function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "red";
   else
      champ.style.backgroundColor = "green";
}

function verifNom(champ)
{
   if(champ.value.length < 2 || champ.value.length > 25)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifPrenom(champ)
{
   if(champ.value.length < 2 || champ.value.length > 25)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifEgal(champ,champ1)
{
     if(champ.value===champ1.value)
	{
		surligne(champ, false);
		surligne(champ1, false);
		return true;
	}
	else
	{
		return false;
	}
}

function verifId(champ)
{
   var regex = /[a-z0-9]/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   
   if(champ.value.length >10)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
    
      surligne(champ, false);
      return true;
   }
   
   
}




function verifForm(f)
{
   var nomOk = verifNom(f.nom);
   var prenomOk = verifPrenom(f.prenom);
   var idOk = verifId(f.log);
   var passOk = verifPass(f.pass);
   var verifpassOk = verifPass(f.verifpass);
   var mailOk = verifMail(f.mail);
   var verifmailOk = verifMail(f.verifmail);
   var verifEgalPassOk = verifEgal(f.pass,f.verifpass);
   var verifEgalMailOk = verifEgal(f.mail,f.verifmail);
  
   
   if( verifEgalPassOk && verifEgalMailOk && verifpassOk && mailOk && verifmailOk && nomOk && prenomOk && idOk && passOk)
   {
      
      return true;
   }
       
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}



function verifPass(champ)
{
	
     console.log(champ.value);
    forcemdp = 0;
    var mdp = champ.value;
   
    var mdpL = mdp.toLowerCase();
    var mdpU = mdp.toUpperCase();
    //var force = document.getElementById('force');

  if (mdp !== "")
    {    
     var reg  = /[0-9]/g;
     var reg2 = /[^A-Za-z0-9]/;


      
     if (reg.test (mdp))    forcemdp = forcemdp + 20;    
     if (reg2.test (mdp)) forcemdp = forcemdp + 20;         
     if(mdp.length >= 8) forcemdp = forcemdp + 20;
	 if(mdp !== mdpL)  forcemdp = forcemdp + 20;
	 if(mdp!== mdpU)   forcemdp = forcemdp + 20;   
	// force.textContent = forcemdp;
    }
  else 
  {
	//force.textContent =0;
	forcemdp=0;
  }
   
   if(forcemdp > 60)
   {
       champ.style.backgroundColor = "green";
        return true;
   }
   else 
   {
       if(forcemdp >= 40 && forcemdp <60)
       {
           champ.style.backgroundColor = "yellow";
       }
       else
       {
           champ.style.backgroundColor = "red";
       }
	return false;
   }
    
    

}


