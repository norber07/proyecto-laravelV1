     @extends('principal')   
     @section('contenido') 

        <template v-if="menu==0">
             <example-component></example-component>       
        </template>

         <template v-if="menu==1">
            <H1>CONTENIDO MENU 1</H1>
        </template>

                 <template v-if="menu==2">
            <H1>CONTENIDO MENU 2</H1>
        </template>
        <template v-if="menu==3">
            <H1>CONTENIDO MENU 3</H1>
        </template>

                 <template v-if="menu==4">
            <H1>CONTENIDO MENU 4</H1>
        </template>

                 <template v-if="menu==5">
            <H1>CONTENIDO MENU 5</H1>
        </template>

                 <template v-if="menu==6">
            <H1>CONTENIDO MENU 6</H1>
        </template>
        
        <template v-if="menu==7">
            <H1>CONTENIDO MENU 7</H1>
        </template>

                 <template v-if="menu==8">
            <H1>CONTENIDO MENU 8</H1>
        </template>

                 <template v-if="menu==9">
            <H1>CONTENIDO MENU 9</H1>
        </template>

                 <template v-if="menu==10">
            <H1>CONTENIDO MENU 10</H1>
        </template>

                 <template v-if="menu==11">
            <H1>CONTENIDO MENU 11</H1>
        </template>

                 <template v-if="menu==12">
            <H1>CONTENIDO MENU 12</H1>
        </template>

     @endsection