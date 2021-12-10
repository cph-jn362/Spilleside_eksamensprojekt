


let canvas = document.querySelector("#canvas"); 
let ctx = canvas.getContext('2d'); 
canvas.width = 650;
canvas.height = 450;

// Banen, som er opsat med et multidimensional array

arr = 

[
   [2,13,12,1,1,1,1,1,1,16,8,9,0],
   [1,1,13,1,1,1,1,11,1,1,6,7,12],
   [1,11,1,1,1,16,1,10,1,1,1,1,1],
   [1,10,1,1,1,1,1,13,1,1,1,1,16],
   [1,1,1,4,1,1,1,1,13,1,1,1,1],
   [1,1,1,1,1,1,0,1,1,1,16,1,1],
   [1,1,1,1,1,1,1,8,9,1,1,14,1],
   [11,1,1,1,1,1,1,6,7,11,1,1,1],
   [10,1,13,1,12,1,1,1,1,10,1,1,1]
]

// variabel til at opsamle point
let pointAntal = 0;

// højde og bredde på tile
let tile = 50; 

// karakternes position
let spillerPosition = {x:0, y:0};
let fjendePosition = {x:0, y:0};
let målPosition = {x:0, y:0};



setInterval(()=>{
    fjendeRute();
   },400)
   

// de forskellige tiles og deres værdier (placering på 'arr')
let tønde = 0; 
let baggrund = 1; 
let spiller = 2; 
let mål = 3; 
let fjende1_1 = 4; 
let fjende1_2 = 5;
let hus1 = 6;
let hus2 = 7;
let hus3 = 8;
let hus4 = 9;
let træ1 = 10;
let træ2 = 11;
let point = 12;
let busk = 13;
let mål1 = 14;
let mål2 = 15;
let ildebrand = 16;
let spillerdød1 = 17;
let spillerdød2 = 18;


//sprites til de give tiles 
let spillerSprite = new Image(); 
spillerSprite.src= 'js_spil/spil_billeder/spiller1.png';

let tøndeSprite = new Image(); 
tøndeSprite.src= 'js_spil/spil_billeder/tønde.png'; 

let baggrundSprite = new Image(); 
baggrundSprite.src= 'js_spil/spil_billeder/baggrund1.png'; 

let fjendeForanSprite = new Image(); 
fjendeForanSprite.src= 'js_spil/spil_billeder/fjende1_1.png'; 

let fjendeBagSprite = new Image(); 
fjendeBagSprite.src= 'js_spil/spil_billeder/fjende1_2.png'; 

let hus1Sprite = new Image(); 
hus1Sprite.src= 'js_spil/spil_billeder/hus1.png';

let hus2Sprite = new Image(); 
hus2Sprite.src= 'js_spil/spil_billeder/hus2.png';

let hus3Sprite = new Image(); 
hus3Sprite.src= 'js_spil/spil_billeder/hus3.png';

let hus4Sprite = new Image(); 
hus4Sprite.src= 'js_spil/spil_billeder/hus4.png';

let træ1Sprite = new Image(); 
træ1Sprite.src= 'js_spil/spil_billeder/træ1.png';

let træ2Sprite = new Image(); 
træ2Sprite.src= 'js_spil/spil_billeder/træ2.png';

let pointSprite = new Image(); 
pointSprite.src= 'js_spil/spil_billeder/point.png';

let buskSprite = new Image(); 
buskSprite.src= 'js_spil/spil_billeder/busk2.png';

let mål1Sprite = new Image(); 
mål1Sprite.src= 'js_spil/spil_billeder/mål1_1.png';

let mål2Sprite = new Image(); 
mål2Sprite.src= 'js_spil/spil_billeder/mål1_2.png';

let ildebrandSprite = new Image(); 
ildebrandSprite.src= 'js_spil/spil_billeder/ildebrand.gif';

let spillerdød1Sprite = new Image(); 
spillerdød1Sprite.src= 'js_spil/spil_billeder/spillerdød1.png';

let spillerdød2Sprite = new Image(); 
spillerdød2Sprite.src= 'js_spil/spil_billeder/spillerdød2.png';

//funktion til at opsætte banen

function drawarr(){

    for(let y= 0; y < arr.length; y++){

      for(let x = 0; x < arr[y].length; x++){

        if(arr[y][x]===  tønde){
            ctx.drawImage(tøndeSprite,x*tile,y*tile,tile,tile);
        }else if(arr[y][x] === baggrund){
            ctx.drawImage(baggrundSprite,x*tile,y*tile,tile,tile);
        }else if(arr[y][x] === spiller){
            spillerPosition.x = x; 
            spillerPosition.y = y; 
            ctx.drawImage(spillerSprite,x*tile,y*tile,tile,tile);
        }else if(arr[y][x] === mål){
            ctx.fillStyle = "blue";
            ctx.fillRect(x*tile,y*tile,tile,tile);
        }else if(arr[y][x] === fjende1_1){
            fjendePosition.x = x; 
            fjendePosition.y = y; 
            ctx.drawImage(fjendeForanSprite,x*tile,y*tile,tile,tile);
        }else if(arr[y][x] === fjende1_2){
            fjendePosition.x = x; 
            fjendePosition.y = y; 
            ctx.drawImage(fjendeBagSprite,x*tile,y*tile,tile,tile);
        }else if(arr[y][x] === hus1){ 
            ctx.drawImage(hus1Sprite,x*tile,y*tile,tile,tile);
        }else if(arr[y][x] === hus2){ 
            ctx.drawImage(hus2Sprite,x*tile,y*tile,tile,tile);
        }else if(arr[y][x] === hus3){
            ctx.drawImage(hus3Sprite,x*tile,y*tile,tile,tile);
        }else if(arr[y][x] === hus4){
            ctx.drawImage(hus4Sprite,x*tile,y*tile,tile,tile);
        }else if(arr[y][x] === træ1){
            ctx.drawImage(træ1Sprite,x*tile,y*tile,tile,tile);
        }else if(arr[y][x] === træ2){
            ctx.drawImage(træ2Sprite,x*tile,y*tile,tile,tile);
        }else if(arr[y][x] === point){
            ctx.drawImage(pointSprite,x*tile,y*tile,tile,tile);
        }else if(arr[y][x] === busk){
            ctx.drawImage(buskSprite,x*tile,y*tile,tile,tile);
        }else if(arr[y][x] === mål1){
            målPosition.x = x;
            målPosition.y = y;
            ctx.drawImage(mål1Sprite,x*tile,y*tile,tile,tile);
        }else if(arr[y][x] === mål2){
            ctx.drawImage(mål2Sprite,x*tile,y*tile,tile,tile);
        }else if(arr[y][x] === ildebrand){
            ctx.drawImage(ildebrandSprite,x*tile,y*tile,tile,tile);
        }else if(arr[y][x] === spillerdød1){
            ctx.drawImage(spillerdød1Sprite,x*tile,y*tile,tile,tile);
        }else if(arr[y][x] === spillerdød2){
            ctx.drawImage(spillerdød2Sprite,x*tile,y*tile,tile,tile);
        }

      }

      
    }

}

drawarr();

//funktioner til lydeffekter når spilleren bevæger sig, får point, dør eller vinder

function lydPoint(){
    let lyd1 = new Audio('js_spil/lydeffekter/point_lydeffekt.wav');
    lyd1.play();
    lyd1.currentTime = 0;
}

function lydDød1(){
    let lyd2 = new Audio('js_spil/lydeffekter/død1_lydeffekt.wav');
    lyd2.play();
    lyd2.currentTime = 0;
}

function lydDød2(){
    let lyd3 = new Audio('js_spil/lydeffekter/død2_lydeffekt.wav');
    lyd3.play();
    lyd3.currentTime = 0;
}

function lydMål(){
    let lyd4 = new Audio('js_spil/lydeffekter/mål_lydeffekt.wav');
    lyd4.play();
    lyd4.currentTime = 0;
}

function lydFodtrin(){
    let rand =  Math.floor(Math.random() * 3) + 1;
    
    if(rand == 1){
        let lyd5 = new Audio('js_spil/lydeffekter/fodtrin_lydeffekt1.wav');
        lyd5.play();
        lyd5.currentTime = 0;
    }else if (rand == 2){
        let lyd6 = new Audio('js_spil/lydeffekter/fodtrin_lydeffekt2.wav');
        lyd6.play();
        lyd6.currentTime = 0;
    }else if (rand == 3){
        let lyd7 = new Audio('js_spil/lydeffekter/fodtrin_lydeffekt3.wav');
        lyd7.play();
        lyd7.currentTime = 0;
    }
}

// fjendens bevægelse og dens mekanik

function fjendeRute(){

    let rand =  Math.floor(Math.random() * 2) + 1;  

    if(rand == 1){ //up
        if(arr[fjendePosition.y - 1][fjendePosition.x] === baggrund){
           arr[fjendePosition.y - 1 ][fjendePosition.x] = fjende1_2;
           arr[fjendePosition.y ][fjendePosition.x] = baggrund;
        }
    }else if(rand == 2){ //down
        if(arr[fjendePosition.y +1 ][fjendePosition.x] === baggrund){
            arr[fjendePosition.y +1 ][fjendePosition.x] = fjende1_1;
            arr[fjendePosition.y ][fjendePosition.x] = baggrund
        }
        } 
        drawarr();
        console.log(rand); 
    }   

// piletasternes funktioner

let keys = {};

window.addEventListener("keydown", 
    function handler(e){
    keys[e.keyCode] = true;    

switch(e.keyCode){

    case 37: // left
        if(arr[spillerPosition.y][spillerPosition.x -1] === baggrund){ 
        arr[spillerPosition.y ][spillerPosition.x -1] = spiller;
        arr[spillerPosition.y ][spillerPosition.x] = baggrund;
        drawarr();
        lydFodtrin();
        } else if(arr[spillerPosition.y][spillerPosition.x -1] === point){
                arr[spillerPosition.y][spillerPosition.x -1] = spiller;
                arr[spillerPosition.y][spillerPosition.x] = baggrund;
                pointAntal += 1;
                lydPoint();
                drawarr();
        } else if(arr[spillerPosition.y][spillerPosition.x -1] === mål1){
                arr[målPosition.y][målPosition.x] = mål2;
                drawarr();
                document.getElementById('besked').innerHTML = `Du har vundet! Du fik ${pointAntal} points.`;
                this.removeEventListener(e.type, handler);
                lydMål();
        } else if(arr[spillerPosition.y][spillerPosition.x -1] === fjende1_1){
            arr[spillerPosition.y][spillerPosition.x] = spillerdød1;
            drawarr();
            document.getElementById('besked').innerHTML = `Du er død! Prøv igen.`;
            this.removeEventListener(e.type, handler);
            lydDød1();
        } else if(arr[spillerPosition.y][spillerPosition.x -1] === fjende1_2){
            arr[spillerPosition.y][spillerPosition.x] = spillerdød1;
            drawarr();
            document.getElementById('besked').innerHTML = `Du er død! Prøv igen.`;
            this.removeEventListener(e.type, handler);
            lydDød1();
        }  else if(arr[spillerPosition.y][spillerPosition.x -1] === ildebrand){
            arr[spillerPosition.y][spillerPosition.x -1] = spillerdød2;
            arr[spillerPosition.y][spillerPosition.x] = baggrund;
            drawarr();
            document.getElementById('besked').innerHTML = `Du er død! Prøv igen.`;
            this.removeEventListener(e.type, handler);
            lydDød2();
        }
        e.preventDefault();   
        break; 
    case 38: // up
        if(arr[spillerPosition.y -1][spillerPosition.x] === baggrund){
        arr[spillerPosition.y -1 ][spillerPosition.x] = spiller;
        arr[spillerPosition.y ][spillerPosition.x] = baggrund;
        drawarr();
        lydFodtrin();
        }   else if(arr[spillerPosition.y -1][spillerPosition.x] === point){
            arr[spillerPosition.y -1][spillerPosition.x] = spiller;
            arr[spillerPosition.y][spillerPosition.x] = baggrund;
            pointAntal += 1;
            lydPoint();
            drawarr();
        }   else if(arr[spillerPosition.y -1][spillerPosition.x] === mål1){
            arr[målPosition.y][målPosition.x] = mål2;
            drawarr();
            document.getElementById('besked').innerHTML = `Du har vundet! Du fik ${pointAntal} points.`;
            this.removeEventListener(e.type, handler);
            lydMål();
        } else if(arr[spillerPosition.y -1][spillerPosition.x] === fjende1_1){
            arr[spillerPosition.y][spillerPosition.x] = spillerdød1;
            drawarr();      
            document.getElementById('besked').innerHTML = `Du er død! Prøv igen.`;
            this.removeEventListener(e.type, handler);
            lydDød1();          
        }  else if(arr[spillerPosition.y -1][spillerPosition.x] === fjende1_2){
            arr[spillerPosition.y][spillerPosition.x] = spillerdød1;
            drawarr();     
            document.getElementById('besked').innerHTML = `Du er død! Prøv igen.`;
            this.removeEventListener(e.type, handler);
            lydDød1();
        }else if(arr[spillerPosition.y -1][spillerPosition.x] === ildebrand){
            arr[spillerPosition.y -1][spillerPosition.x] = spillerdød2;
            arr[spillerPosition.y][spillerPosition.x] = baggrund;
            drawarr();
            document.getElementById('besked').innerHTML = `Du er død! Prøv igen.`;
            this.removeEventListener(e.type, handler);
            lydDød2();
        }
        e.preventDefault();   
        break; 
    case 39: // right
        if(arr[spillerPosition.y][spillerPosition.x +1] === baggrund){
        arr[spillerPosition.y ][spillerPosition.x +1] = spiller;
        arr[spillerPosition.y ][spillerPosition.x] = baggrund;
        drawarr();
        lydFodtrin();
        }   else if(arr[spillerPosition.y][spillerPosition.x +1] === point){
            arr[spillerPosition.y][spillerPosition.x +1] = spiller;
            arr[spillerPosition.y][spillerPosition.x] = baggrund;
            pointAntal += 1;
            lydPoint();
            drawarr();
        }   else if(arr[spillerPosition.y][spillerPosition.x +1] === mål1){
            arr[målPosition.y][målPosition.x] = mål2;
            drawarr();
            document.getElementById('besked').innerHTML = `Du har vundet! Du fik ${pointAntal} points.`;
            this.removeEventListener(e.type, handler);
            lydMål();
        }   else if(arr[spillerPosition.y][spillerPosition.x +1] === fjende1_1){
            arr[spillerPosition.y][spillerPosition.x] = spillerdød1;
            drawarr();  
            document.getElementById('besked').innerHTML = `Du er død! Prøv igen.`;
            this.removeEventListener(e.type, handler);
            lydDød1();  
        }   else if(arr[spillerPosition.y][spillerPosition.x +1] === fjende1_2){
            arr[spillerPosition.y][spillerPosition.x] = spillerdød1;
            drawarr();
            document.getElementById('besked').innerHTML = `Du er død! Prøv igen.`;
            this.removeEventListener(e.type, handler);
            lydDød1();
        }else if(arr[spillerPosition.y][spillerPosition.x +1] === ildebrand){
            arr[spillerPosition.y][spillerPosition.x +1] = spillerdød2;
            arr[spillerPosition.y][spillerPosition.x] = baggrund;
            drawarr();
            document.getElementById('besked').innerHTML = `Du er død! Prøv igen.`;
            this.removeEventListener(e.type, handler);
            lydDød2();
        }
        e.preventDefault();   
        break; 
    case 40: // down
        if(arr[spillerPosition.y+1][spillerPosition.x] === baggrund){
        arr[spillerPosition.y+1 ][spillerPosition.x] = spiller;
        arr[spillerPosition.y ][spillerPosition.x] = baggrund;
        lydFodtrin();
        } else if(arr[spillerPosition.y +1][spillerPosition.x] === point){
            arr[spillerPosition.y +1][spillerPosition.x] = spiller;
            arr[spillerPosition.y][spillerPosition.x] = baggrund;
            pointAntal += 1;
            lydPoint();
            drawarr();
        } else if(arr[spillerPosition.y +1][spillerPosition.x] === mål1){
            arr[målPosition.y][målPosition.x] = mål2;
            drawarr();
            document.getElementById('besked').innerHTML = `Du har vundet! Du fik ${pointAntal} points.`;
            this.removeEventListener(e.type, handler);
            lydMål();
        } else if(arr[spillerPosition.y +1][spillerPosition.x] === fjende1_1){
            arr[spillerPosition.y][spillerPosition.x] = spillerdød1;
            drawarr();
            document.getElementById('besked').innerHTML = `Du er død! Prøv igen.`;
            this.removeEventListener(e.type, handler);
            lydDød1();
        }  else if(arr[spillerPosition.y +1][spillerPosition.x] === fjende1_2){
            arr[spillerPosition.y][spillerPosition.x] = spillerdød1;
            drawarr();
           document.getElementById('besked').innerHTML = `Du er død! Prøv igen.`;
            this.removeEventListener(e.type, handler);
            lydDød1();
        }   else if(arr[spillerPosition.y +1][spillerPosition.x] === ildebrand){
            arr[spillerPosition.y +1][spillerPosition.x] = spillerdød2;
            arr[spillerPosition.y][spillerPosition.x] = baggrund;
            drawarr();
            document.getElementById('besked').innerHTML = `Du er død! Prøv igen.`;
            this.removeEventListener(e.type, handler);
            lydDød2();
        }
        e.preventDefault();   
        break; 

}
    
    
},false);

window.addEventListener('keyup',
function handler(e){
    keys[e.keyCode] = false;
},

false);


window.addEventListener("load", drawarr);













