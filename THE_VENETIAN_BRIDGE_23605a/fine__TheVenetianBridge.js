document.getElementById("fine__").innerHTML=``;


//
// Collezione funzioni utili
//
//
//

    function ColoreEsadecimaleRandom() {
        var LettereColoreRandom__ = '0123456789ABCDEF';
        var CreaColoreRandom__ = '#';
        var IColoreRandom__;
        for (IColoreRandom__ = 0; IColoreRandom__ < 6; IColoreRandom__++ ) {
            CreaColoreRandom__ = CreaColoreRandom__+LettereColoreRandom__[Math.round(Math.random() * 15)];
        }
        return CreaColoreRandom__;
    }
    
    ApplicaColoreRandom__=ColoreEsadecimaleRandom();
