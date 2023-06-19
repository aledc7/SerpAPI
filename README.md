![https://github.com/aledc7/SerpAPI/blob/main/resources/gld500x500.png?raw=true](https://github.com/aledc7/SerpAPI/blob/main/resources/gld500x500.png?raw=true)

# SerpAPI 

## API de Resultados Deportivos de Google  


SerpApi proporciona una API de resultados deportivos de Google que permite a los usuarios recopilar los resultados de los juegos deportivos en tiempo real.  
Los datos que se pueden extraer incluyen:

  - Nombres de equipos  
  - Puntuaciones  
  - Torneos  
  - Fechas

  - 

## Deportes de equipo e individuales   

La API de SerpApi puede recopilar resultados de una variedad de deportes de equipo, incluyendo:  
- fútbol  
- fútbol americano  
- baloncesto  
- hockey  
- béisbol  
- cricket



También puede recopilar resultados de deportes individuales como tenis y carreras de autos. Los datos extraídos pueden incluir el título del partido, la miniatura, la liga, la puntuación, los momentos destacados del video, el torneo, la etapa y más.  

## Estadísticas de Atletas Profesionales  

Además de los resultados de los juegos, la API de SerpApi también puede extraer estadísticas de atletas profesionales.   
Esto puede incluir estadísticas de jugadores de fútbol, estadísticas de jugadores de fútbol americano, baloncesto y béisbol,   
y estadísticas de jugadores de tenis.    
Los datos extraídos pueden incluir el título, la profesión, el torneo, los datos del juego, que podrían contener el año,  
los partidos, los goles, las asistencias y más.  




## Integración de la API  

SerpApi proporciona ejemplos de código en varios lenguajes de programación para facilitar la integración de su API en las   
aplicaciones de los usuarios. Los lenguajes de programación soportados incluyen Ruby, Python, Node.js, TypeScript, PHP,  
.NET, Java, Go, Rust y Google Sheets.  



## Resultados de Búsqueda Personalizado  

Además de los resultados deportivos, la API de SerpApi también puede personalizar    
los resultados de búsqueda de Google para proporcionar datos más relevantes y útiles. 

Esto puede incluir los siguientes resultados:   
- búsqueda de Google
- resultados de anuncios
- resultados de la caja de respuestas
- resultados disponibles
- resultados de eventos
- resultados de productos inmersivos
- resultados de trabajos
- resultados de noticias
- resultados orgánicos
- resultados de productos
- resultados de recetas
- resultados de búsquedas relacionadas
- resultados de videos cortos  
- resultados de historias visuales


## Ejemplos de mplementacion en php: 

Este ejemplo trae los __Team sports results__ (Soccer, American Football, Basketball, Hockey, Baseball, Cricket)

Así debería quedar armado el endpoint que mediante GET trae los datos:
```php

// ENDPOINT YA ARMADO COMO EJEMPLO
https://serpapi.com/search.json?q=manchester+united&location=austin,+texas,+united+states


require 'path/to/google-search-results.php';
require 'path/to/restclient.php';

$query = [
 "q" => "manchester united",
 "location" => "austin, texas, united states",
];

$search = new GoogleSearch('secret_api_key');
$result = $search->get_json($query);
$sports_results = $result->sports_results;
```

La respuesta devuelta en JSON sería la siguiente:
```json
{
  "sports_results": {
    "title": "Manchester United F.C.",
    "league": "7th in Premier League",
    "thumbnail": "<URL to image>",
    "games": [
      {
        "status": "FT",
        "date": "11/2",
        "video_highlights": {
          "link": "https://www.youtube.com/watch?v=Zwi8r9-AiRY&feature=onebox",
          "thumbnail": "https://ssl.gstatic.com/onebox/media/sports/videos/epl/24ayiXg57nzlM5Zo_192x108.jpg",
          "duration": "11:47"
        },
        "teams": [
          {
            "name": "Bournemouth",
            "score": "1",
            "thumbnail": "https://ssl.gstatic.com/onebox/media/sports/logos/IcOt-hrK04B-RlRwI3R0yA_48x48.png"
          },
          {
            "name": "Man United",
            "score": "0",
            "thumbnail": "https://ssl.gstatic.com/onebox/media/sports/logos/udQ6ns69PctCv143h-GeYw_48x48.png"
          }
        ]
      },
      {
        "tournament": "Europa League",
        "stage": "Group stage · Matchday 4 of 6",
        "status": "FT",
        "date": "11/7",
        "video_highlights": {
          "link": "https://www.youtube.com/watch?v=NUeIiNM9V4I&feature=onebox",
          "thumbnail": "https://ssl.gstatic.com/onebox/media/sports/videos/uefa/mzJiND9g3FxiJLj3_192x108.jpg",
          "duration": "5:18"
        },
        "teams": [
          {
            "name": "Man United",
            "score": "3",
            "thumbnail": "https://ssl.gstatic.com/onebox/media/sports/logos/udQ6ns69PctCv143h-GeYw_48x48.png"
          },
          {
            "name": "Partizan",
            "score": "0",
            "thumbnail": "https://ssl.gstatic.com/onebox/media/sports/logos/v_bEGhgMcIRbc7HdzgY1sw_48x48.png"
          }
        ]
      },
      {
        "date": "Sun, 12/1",
        "time": "17:30 PM",
        "teams": [
          {
            "name": "Man United",
            "thumbnail": "https://ssl.gstatic.com/onebox/media/sports/logos/udQ6ns69PctCv143h-GeYw_48x48.png"
          },
          {
            "name": "Aston Villa",
            "thumbnail": "https://ssl.gstatic.com/onebox/media/sports/logos/uyNNelfnFvCEnsLrUL-j2Q_48x48.png"
          }
        ]
      }
    ]
  }
}
```


Para integrar esta API, ya existe una __Librería Php__ con todo dispuesto para comenzar a utilizarla.   
Acá está el enlace de la API [https://github.com/serpapi/google-search-results-php](https://github.com/serpapi/google-search-results-php)  




 

## Conclusión  

La API de resultados deportivos de Google de SerpApi es una herramienta para recopilar y analizar datos  
deportivos en tiempo real.   
Con su gama de características y su integración, puede ser una valiosa adición a cualquier aplicación o servicio que requiera acceso a datos deportivos en tiempo real.    

