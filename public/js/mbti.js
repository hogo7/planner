function result(E,I,S,N,T,F,J,P){
    let pos1,pos2,pos3,pos4;
    if(E/I>1)
        pos1='E';
    else    
        pos1='I';


    if(N/S>1)
        pos2='N';
    else    
        pos2='S';
    

    if(T/F>1)
        pos3='T';
    else    
        pos3='F';  
        
        
    if(P/J>1)
        pos4='P';
    else    
        pos4='J';
    


        let result=pos1+pos2+pos3+pos4;

        return result;
};


$(document).ready(()=>{


    


    let E=0,I=0,S=0,N=0,T=0,F=0,J=0,P=0,qnum=1,q;
    
    $('.E').click(()=>{
    E++;
    
    
    q='#q'+qnum;
    $(`${q}`).fadeOut();
    qnum++;
    let  qnext='#q'+qnum;
    $(`${qnext}`).fadeIn();
    
    console.log(`QN=${qnext},I=${I},S=${S},T=${T},P=${P},F=${F},N=${N},J=${J},E=${E}`);

    });




    $('.I').click(()=>{
        I++;
        q='#q'+qnum;
        $(`${q}`).fadeOut();
        qnum++;
        let  qnext='#q'+qnum;
        $(`${qnext}`).fadeIn();
        console.log(`QN=${qnext},I=${I},S=${S},T=${T},P=${P},F=${F},N=${N},J=${J},E=${E}`);
    });
    
    
    
    
    $('.S').click(()=>{
        S++;
        q='#q'+qnum;
        $(`${q}`).fadeOut();
        qnum++;
        let  qnext='#q'+qnum;
        $(`${qnext}`).fadeIn();
        console.log(`QN=${qnext},I=${I},S=${S},T=${T},P=${P},F=${F},N=${N},J=${J},E=${E}`);

    });
    
    
    
    
    
    $('.N').click(()=>{
        N++;
        q='#q'+qnum;
        $(`${q}`).fadeOut();
        qnum++;
        let  qnext='#q'+qnum;
        $(`${qnext}`).fadeIn();
        console.log(`QN=${qnext},I=${I},S=${S},T=${T},P=${P},F=${F},N=${N},J=${J},E=${E}`);

    });
    
    
    
    
    
    $('.T').click(()=>{
        T++;
       q='#q'+qnum;
        $(`${q}`).fadeOut();
        qnum++;
        let  qnext='#q'+qnum;
        $(`${qnext}`).fadeIn();
        console.log(`QN=${qnext},I=${I},S=${S},T=${T},P=${P},F=${F},N=${N},J=${J},E=${E}`);

    });
    
    
    
    
    $('.F').click(()=>{
        F++;
        q='#q'+qnum;
        $(`${q}`).fadeOut();
        qnum++;
        let  qnext='#q'+qnum;
        $(`${qnext}`).fadeIn();
        console.log(`QN=${qnext},I=${I},S=${S},T=${T},P=${P},F=${F},N=${N},J=${J},E=${E}`);

    });
    
    
    
    
    
    
    $('.J').click(()=>{
        J++;
        q='#q'+qnum;
        $(`${q}`).fadeOut();
        qnum++;
        
        let  qnext='#q'+qnum;
        $(`${qnext}`).fadeIn();
        console.log(`QN=${qnext},I=${I},S=${S},T=${T},P=${P},F=${F},N=${N},J=${J},E=${E}`);
        if(qnum==21){

            let mark=result(E,I,S,N,T,F,J,P);
            $(".result").text(mark);

        }
    });
    
    
    
    
    
    $('.P').click(()=>{
        P++;
        q='#q'+qnum;
        $(`${q}`).fadeOut();
        qnum++;
        let  qnext='#q'+qnum;
        $(`${qnext}`).fadeIn();
        console.log(`QN=${qnext},I=${I},S=${S},T=${T},P=${P},F=${F},N=${N},J=${J},E=${E}`);
        //last question
        if(qnum==21){

            let mark=result(E,I,S,N,T,F,J,P);
           $(".result").text(mark);
            $(".Eres").attr('value',E);
            $(".Ires").attr('value',I);
            $(".Nres").attr('value',N);
            $(".Sres").attr('value',S);
            $(".Fres").attr('value',F);
            $(".Tres").attr('value',T);
            $(".Jres").attr('value',J);
            $(".Pres").attr('value',P);
            $(".mbtiResult").attr('value',mark);
        }
    });
    


});