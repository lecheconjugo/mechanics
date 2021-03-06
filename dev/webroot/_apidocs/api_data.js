define({ "api": [
  {
    "type": "post",
    "url": "/api/cars/add",
    "title": "Registrar auto",
    "version": "0.1.0",
    "name": "add",
    "group": "Cars",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Auth header with JWT Token</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Accept",
            "description": "<p>Datos aceptados</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Content-Type",
            "description": "<p>Tipo de Datos</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Authorization-Example:",
          "content": "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjIsImV4cCI6MTQ4NzU5....\nAccept: application/json\nContent-type: application/json",
          "type": "String"
        }
      ]
    },
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "patent",
            "description": "<p>Pantente del auto.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "model",
            "description": "<p>Modelo del auto.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "brand",
            "description": "<p>Marca del auto.</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "year",
            "description": "<p>Año del auto.</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "mileage",
            "description": "<p>Kilometraje del auto.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "observations",
            "description": "<p>Observaciones del auto.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "success",
            "description": "<p>true/false.</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "data",
            "description": "<p>detalles del registro.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"Success\": true,\n   \"data\": [\n       {\n           \"id\": \"1\",\n           \"token\": \"token\",\n           \"message\": \"Registro exitoso\"\n       },\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "CarBadResponse",
            "description": "<p>Registro no realizado</p>"
          },
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "BaD-Response:",
            "description": "<p>HTTP/1.1 401 Bad Response { &quot;error&quot;: &quot;BadResponse&quot; }</p>"
          }
        ]
      }
    },
    "filename": "C:/_proyectos/cl_fullmec_fullmec/dev/src/Controller/Api/CarsController.php",
    "groupTitle": "Cars"
  },
  {
    "type": "POST",
    "url": "/api/cars/delete/id_auto",
    "title": "eliminar auto",
    "version": "0.1.0",
    "name": "delete",
    "group": "Cars",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Auth header with JWT Token</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Accept",
            "description": "<p>Datos aceptados</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Content-Type",
            "description": "<p>Tipo de Datos</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Authorization-Example:",
          "content": "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjIsImV4cCI6MTQ4NzU5....\nAccept: application/json\nContent-type: application/json",
          "type": "String"
        }
      ]
    },
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "id_auto",
            "description": "<p>Id auto.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "success",
            "description": "<p>true/false.</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "data",
            "description": "<p>detalles del registro.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"Success\": true,\n   \"data\": [\n       {\n           \"id\": \"1\",\n           \"message\": \"Registro eliminado exitosamente\"\n       },\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "CarBadResponse",
            "description": "<p>Registro no eliminado</p>"
          },
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "BaD-Response:",
            "description": "<p>HTTP/1.1 401 Bad Response { &quot;error&quot;: &quot;BadResponse&quot; }</p>"
          }
        ]
      }
    },
    "filename": "C:/_proyectos/cl_fullmec_fullmec/dev/src/Controller/Api/CarsController.php",
    "groupTitle": "Cars"
  },
  {
    "type": "post",
    "url": "/api/cars/edit/id_auto",
    "title": "Editar autos",
    "version": "0.1.0",
    "name": "edit",
    "group": "Cars",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Auth header with JWT Token</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Accept",
            "description": "<p>Datos aceptados</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Content-Type",
            "description": "<p>Tipo de Datos</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Authorization-Example:",
          "content": "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjIsImV4cCI6MTQ4NzU5....\nAccept: application/json\nContent-type: application/json",
          "type": "String"
        }
      ]
    },
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "patent",
            "description": "<p>Pantente del auto.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "model",
            "description": "<p>Modelo del auto.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "brand",
            "description": "<p>Marca del auto.</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "year",
            "description": "<p>Año del auto.</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "mileage",
            "description": "<p>Kilometraje del auto.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "observations",
            "description": "<p>Observaciones del auto.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "success",
            "description": "<p>true/false.</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "data",
            "description": "<p>detalles del registro.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"Success\": true,\n   \"data\": [\n       {\n           \"id\": \"1\",\n           \"token\": \"token\",\n           \"message\": \"Registro editado exitosamente\"\n       },\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "CarBadResponse",
            "description": "<p>Registro no realizado</p>"
          },
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "BaD-Response:",
            "description": "<p>HTTP/1.1 401 Bad Response { &quot;error&quot;: &quot;BadResponse&quot; }</p>"
          }
        ]
      }
    },
    "filename": "C:/_proyectos/cl_fullmec_fullmec/dev/src/Controller/Api/CarsController.php",
    "groupTitle": "Cars"
  },
  {
    "type": "get",
    "url": "/api/cars/index",
    "title": "Listar autos del cliente",
    "version": "0.1.0",
    "name": "index",
    "group": "Cars",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Auth header with JWT Token</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Accept",
            "description": "<p>Datos aceptados</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Content-Type",
            "description": "<p>Tipo de Datos</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Authorization-Example:",
          "content": "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjIsImV4cCI6MTQ4NzU5....\nAccept: application/json\nContent-type: application/json",
          "type": "String"
        }
      ]
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "success",
            "description": "<p>true/false.</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "data",
            "description": "<p>detalles del auto.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"Success\": true,\n   \"data\": [\n       {\n           \"id\": \"1\",\n           \"patent\": \"CL-12313\",\n           \"model\": \"Modelo\",\n           \"brand\": \"marca\",\n           \"year\" : \"2017\",\n           \"mileage\" : \"250\",\n           \"observations\" : \"observaciones\",\n           \"requests\" : {\n                   \"id\" : \"1\",\n                   \"id\": \"1\",\n                   \"client_id\": \"1\",\n                   \"mechanic_id\": \"2\",\n                   \"car_id\": \"1\",\n                   \"address_name\": \"Calle uno\",\n                   \"address_number\": \"01\",\n                   \"address_complement\":\"33-A\",\n                   \"city_id\": \"1\",\n                   \"commune_id\": \"1\",\n                   \"status\": \"1\",\n                   \"active\": \"true\",\n                   \"start_time_schedule_requested\": \"0000-00-00 00:00:00\",\n                   \"type_documents_payment\": \"1\",\n               }\n\n       },\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "CarBadResponse",
            "description": "<p>Datos no encontrados</p>"
          },
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "BaD-Response:",
            "description": "<p>HTTP/1.1 401 Bad Response { &quot;error&quot;: &quot;BadResponse&quot; }</p>"
          }
        ]
      }
    },
    "filename": "C:/_proyectos/cl_fullmec_fullmec/dev/src/Controller/Api/CarsController.php",
    "groupTitle": "Cars"
  },
  {
    "type": "get",
    "url": "/api/cars/view/id_auto",
    "title": "ver auto",
    "version": "0.1.0",
    "name": "view",
    "group": "Cars",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Auth header with JWT Token</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Accept",
            "description": "<p>Datos aceptados</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Content-Type",
            "description": "<p>Tipo de Datos</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Authorization-Example:",
          "content": "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjIsImV4cCI6MTQ4NzU5....\nAccept: application/json\nContent-type: application/json",
          "type": "String"
        }
      ]
    },
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id_auto",
            "description": "<p>Id del auto.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "success",
            "description": "<p>true/false.</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "data",
            "description": "<p>detalles del registro.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"Success\": true,\n   \"data\": [\n       {\n            \"id\":1,\n            \"model\":\"Fiesta\",\n            \"brand\":\"Ford\",\n            \"observations\":\"Observaciones\",\n            \"requests\":[\n               {\n                  \"id\":1,\n                  \"client_id\":1,\n                  \"mechanic_id\":2,\n                  \"car_id\":1,\n                  \"address_name\": \"calle\",\n                  \"address_number\": \"111\",\n                  \"address_complement\": \" 33-B\",\n                  \"city_id\": 1,\n                  \"commune_id\": 1,\n                  \"status\": 1,\n                  \"active\": true,\n                  \"start_time_schedule_requested\": 0000-00-00 00:00:00,\n                  \"type_documents_payment\": null,\n                  \"created\": null,\n                  \"modified\": null,\n                  \"answered_surveys\":[\n                     {\n                        \"request_id\": 1,\n                        \"survey_id\": 1,\n                        \"survey\":{\n                           \"name\":\"surveys algo\"\n                        }\n                     }\n                  ],\n                  \"mechanic\":{\n                     \"name\":\"MECANICO\",\n                     \"last_name\":\"IDEAUNO\",\n                     \"email\":\"mecanico+1@ideauno.cl\",\n                     \"phone1\":\"90000000\"\n                  },\n                  \"available_services\":[\n                     {\n                        \"id\":1,\n                        \"requests_type_id\":1,\n                        \"name\":\"Serivicio\",\n                        \"description\":\"descripcion\",\n                        \"estimated_time\":1,\n                        \"real_estimated_time\":1,\n                        \"price\":15000,\n                        \"active\":true,\n                        \"created\":null,\n                        \"modified\":null,\n                        \"inspection\":false,\n                        \"_joinData\":{\n                           \"id\":1,\n                           \"request_id\":1,\n                           \"available_service_id\":1,\n                           \"created\":null,\n                           \"modified\":null\n                        },\n                        \"items\":[\n                           {\n                              \"id\":1,\n                              \"name\":\"Caucho\",\n                              \"description\":\"Caucho\",\n                              \"quantity\":1,\n                              \"cost\":8900,\n                              \"brand\":\"Goodyear\",\n                              \"active\":true,\n                              \"created\":null,\n                              \"modified\":null,\n                              \"category\":\"Prueba\",\n                              \"_joinData\":{\n                                 \"id\":1,\n                                 \"available_service_id\":1,\n                                 \"item_id\":1,\n                                 \"active\":true,\n                                 \"created\":null,\n                                 \"modified\":null\n                              }\n                           }\n                        ]\n                     }\n                  ],\n                  \"requests_files\":[\n                     {\n                        \"id\":1,\n                        \"request_id\":1,\n                        \"name\":\"esto es un archivo\",\n                        \"type\":\"1\",\n                        \"size\":1,\n                        \"active\":true,\n                        \"created\":null,\n                        \"modified\":null\n                     }\n                  ],\n                  \"purcharse_orders\":[\n\n                  ],\n                  \"payments\":[\n\n                   ],\n                  \"health_reports\":[\n\n                   ],\n                  \"commune\":{\n                     \"id\":1,\n                     \"name\":\"Santiago\",\n                     \"active\":null,\n                     \"created\":null,\n                     \"modified\":null,\n                     \"city_id\":1\n                  },\n                  \"city\":{\n                     \"id\":1,\n                     \"name\":\"Santiago\",\n                     \"active\":null,\n                     \"created\":null,\n                     \"modified\":null\n                  }\n               },\n            ]\n\n       }\n       ],\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "CarBadResponse",
            "description": "<p>Registro no realizado</p>"
          },
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "BaD-Response:",
            "description": "<p>HTTP/1.1 401 Bad Response { &quot;error&quot;: &quot;BadResponse&quot; }</p>"
          }
        ]
      }
    },
    "filename": "C:/_proyectos/cl_fullmec_fullmec/dev/src/Controller/Api/CarsController.php",
    "groupTitle": "Cars"
  },
  {
    "type": "get",
    "url": "/api/cities/index",
    "title": "Listar ciudades",
    "version": "0.1.0",
    "name": "index",
    "group": "Cities",
    "header": {
      "examples": [
        {
          "title": "Headers-Example:",
          "content": "Accept: application/json\nContent-type: application/json",
          "type": "String"
        }
      ]
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "success",
            "description": "<p>true/false.</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "data",
            "description": "<p>detalles de la ciudad.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"Success\": true,\n   \"data\": [\n       {\n           \"id\": \"1\",\n           \"name\": \"Santiago\"\n       },\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "CarBadResponse",
            "description": "<p>Datos no encontrados</p>"
          },
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "BaD-Response:",
            "description": "<p>HTTP/1.1 401 Bad Response { &quot;error&quot;: &quot;BadResponse&quot; }</p>"
          }
        ]
      }
    },
    "filename": "C:/_proyectos/cl_fullmec_fullmec/dev/src/Controller/Api/CitiesController.php",
    "groupTitle": "Cities"
  },
  {
    "type": "get",
    "url": "/api/communes/index/(:city_id)",
    "title": "Listar Comunas",
    "version": "0.1.0",
    "name": "index",
    "group": "Communes",
    "header": {
      "examples": [
        {
          "title": "Headers-Example:",
          "content": "Accept: application/json\nContent-type: application/json",
          "type": "String"
        }
      ]
    },
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>Identificador de la ciudad</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "success",
            "description": "<p>true/false.</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "data",
            "description": "<p>listar comunas de acuerdo a la ciudad.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"Success\": true,\n   \"data\": [\n       {\n           \"id\": \"14\",\n           \"name\": \"Las Condes\",\n           \"city_id\": 1,\n           \"city\": {\n               \"name\": \"Santiago\"\n           }\n       },\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "CarBadResponse",
            "description": "<p>Datos no encontrados</p>"
          },
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "BaD-Response:",
            "description": "<p>HTTP/1.1 401 Bad Response { &quot;error&quot;: &quot;BadResponse&quot; }</p>"
          }
        ]
      }
    },
    "filename": "C:/_proyectos/cl_fullmec_fullmec/dev/src/Controller/Api/CommunesController.php",
    "groupTitle": "Communes"
  },
  {
    "type": "post",
    "url": "/api/qualifications_to_mechanics/add",
    "title": "Registrar Calificacion",
    "version": "0.1.0",
    "name": "add",
    "group": "QualificationsToMechanics",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Auth header with JWT Token</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Accept",
            "description": "<p>Datos aceptados</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Content-Type",
            "description": "<p>Tipo de Datos</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Authorization-Example:",
          "content": "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjIsImV4cCI6MTQ4NzU5....\nAccept: application/json\nContent-type: application/json",
          "type": "String"
        }
      ]
    },
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "request_id",
            "description": "<p>Id de la solicitud</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "mechanic_id",
            "description": "<p>Id del mecanico</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "score",
            "description": "<p>Puntaje.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "observations",
            "description": "<p>Observaciones no obligatoria.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "success",
            "description": "<p>true/false.</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "data",
            "description": "<p>detalles del registro.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"Success\": true,\n   \"data\": [\n       {\n           \"id\": \"1\",\n           \"message\": \"Registro exitoso\"\n       },\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "QualificationsToMechanicsBadResponse",
            "description": "<p>Registro no realizado</p>"
          },
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "BaD-Response:",
            "description": "<p>HTTP/1.1 401 Bad Response { &quot;error&quot;: &quot;BadResponse&quot; }</p>"
          }
        ]
      }
    },
    "filename": "C:/_proyectos/cl_fullmec_fullmec/dev/src/Controller/Api/QualificationsToMechanicsController.php",
    "groupTitle": "QualificationsToMechanics"
  },
  {
    "type": "get",
    "url": "/api/qualifications_to_mechanics/index",
    "title": "Listar Calificaciones",
    "version": "0.1.0",
    "name": "index",
    "group": "QualificationsToMechanics",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Auth header with JWT Token</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Accept",
            "description": "<p>Datos aceptados</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Content-Type",
            "description": "<p>Tipo de Datos</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Authorization-Example:",
          "content": "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjIsImV4cCI6MTQ4NzU5....\nAccept: application/json\nContent-type: application/json",
          "type": "String"
        }
      ]
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "success",
            "description": "<p>true/false.</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "data",
            "description": "<p>detalles de la calificacion.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"Success\": true,\n   \"data\": [\n       {\n\n       },\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "QualificationsToMechanicsBadResponse",
            "description": "<p>Datos no encontrados</p>"
          },
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "BaD-Response:",
            "description": "<p>HTTP/1.1 401 Bad Response { &quot;error&quot;: &quot;BadResponse&quot; }</p>"
          }
        ]
      }
    },
    "filename": "C:/_proyectos/cl_fullmec_fullmec/dev/src/Controller/Api/QualificationsToMechanicsController.php",
    "groupTitle": "QualificationsToMechanics"
  },
  {
    "type": "get",
    "url": "/api/qualifications_to_echanics/view/id_calificacion",
    "title": "Ver calificacion detallada",
    "version": "0.1.0",
    "name": "view",
    "group": "QualificationsToMechanics",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Auth header with JWT Token</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Accept",
            "description": "<p>Datos aceptados</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Content-Type",
            "description": "<p>Tipo de Datos</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Authorization-Example:",
          "content": "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjIsImV4cCI6MTQ4NzU5....\nAccept: application/json\nContent-type: application/json",
          "type": "String"
        }
      ]
    },
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id_qualifications",
            "description": "<p>Id de la calificacion.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "success",
            "description": "<p>true/false.</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "data",
            "description": "<p>detalles del registro.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"Success\": true,\n   \"data\": [\n       {\n            \"id\":1,\n            \"model\":\"Fiesta\",\n            \"brand\":\"Ford\",\n            \"observations\":\"Observaciones\",\n       }\n       ],\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "QualificationsToMechanicsBadResponse",
            "description": "<p>Registro no realizado</p>"
          },
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "BaD-Response:",
            "description": "<p>HTTP/1.1 401 Bad Response { &quot;error&quot;: &quot;BadResponse&quot; }</p>"
          }
        ]
      }
    },
    "filename": "C:/_proyectos/cl_fullmec_fullmec/dev/src/Controller/Api/QualificationsToMechanicsController.php",
    "groupTitle": "QualificationsToMechanics"
  },
  {
    "type": "post",
    "url": "/api/requests/edit/id_requests",
    "title": "Editar Solicitudes",
    "version": "0.1.0",
    "name": "edit",
    "group": "Requests",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Auth header with JWT Token</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Accept",
            "description": "<p>Datos aceptados</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "Content-Type",
            "description": "<p>Tipo de Datos</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Authorization-Example:",
          "content": "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjIsImV4cCI6MTQ4NzU5....\nAccept: application/json\nContent-type: application/json",
          "type": "String"
        }
      ]
    },
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "pordefinir",
            "description": "<p>Por definir</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "success",
            "description": "<p>true/false.</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "data",
            "description": "<p>detalles del registro.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"Success\": true,\n   \"data\": [\n       {\n           \"id\": \"1\",\n           \"token\": \"token\",\n           \"message\": \"Solicitud finalizada\"\n       },\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "RequestsBadResponse",
            "description": "<p>Registro no realizado</p>"
          },
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "BaD-Response:",
            "description": "<p>HTTP/1.1 401 Bad Response { &quot;error&quot;: &quot;BadResponse&quot; }</p>"
          }
        ]
      }
    },
    "filename": "C:/_proyectos/cl_fullmec_fullmec/dev/src/Controller/Api/RequestsController.php",
    "groupTitle": "Requests"
  },
  {
    "type": "post",
    "url": "/api/users/register",
    "title": "Crea un cliente/mecanico",
    "version": "0.1.0",
    "name": "Add",
    "group": "Users",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "role_id",
            "description": "<p>(5) Cliente / (6) Mecanico.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>Nombre.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "last_name",
            "description": "<p>Apellido.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>Correo Electronico.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "phone1",
            "description": "<p>Teléfono.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "address_name",
            "description": "<p>Calle.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "address_nummber",
            "description": "<p>Numero.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "address_complement",
            "description": "<p>Complemento.</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "city_id",
            "description": "<p>Id Ciudad.</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "commune_id",
            "description": "<p>Id Comuna.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>Contraseña.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "confirm_password",
            "description": "<p>Repetir contraseña.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "success",
            "description": "<p>true/false.</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "data",
            "description": "<p>[id,toke,message].</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"Success\": true,\n   \"data\": [\"id\":1, \"token\":\"tokenTokenToKen\", \"message\":\"Se ha enviado un correo para la activación de tu cuenta\"],\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "UserBadResponse",
            "description": "<p>El usuario no ha podido crearse</p>"
          },
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "BaD-Response:",
            "description": "<p>HTTP/1.1 400 Bad Response { &quot;error&quot;: &quot;BadResponse&quot; }</p>"
          }
        ]
      }
    },
    "filename": "C:/_proyectos/cl_fullmec_fullmec/dev/src/Controller/Api/UsersController.php",
    "groupTitle": "Users"
  },
  {
    "type": "get",
    "url": "/api/users/activated_account",
    "title": "Activar cuenta solo para clientes",
    "version": "0.1.0",
    "name": "activated_account",
    "group": "Users",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "hash_activate",
            "description": "<p>Hash enviado al correo</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "success",
            "description": "<p>true/false.</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "data",
            "description": "<p>[token,redirec] regresa el token y la direccion para redireccionar.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"Success\": true,\n   \"data\": [\"token\":\"tokenTokenToKen\",\"redirect\":\"/api/users/login\"],\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "UserBadResponse",
            "description": "<p>Hash not found</p>"
          },
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "BaD-Response:",
            "description": "<p>HTTP/1.1 400 Bad Response { &quot;error&quot;: &quot;BadResponse&quot; }</p>"
          }
        ]
      }
    },
    "filename": "C:/_proyectos/cl_fullmec_fullmec/dev/src/Controller/Api/UsersController.php",
    "groupTitle": "Users"
  },
  {
    "type": "post",
    "url": "/api/users/login",
    "title": "Iniciar session",
    "version": "0.1.0",
    "name": "login",
    "group": "Users",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>Correo electronico</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>Contraseña.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "success",
            "description": "<p>true/false.</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "data",
            "description": "<p>[token] el token se debe pasar en el headers Authorization Bearer {Your_Token} para poder moverse en la aplicacion.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"Success\": true,\n   \"data\": [\"token\":\"tokenTokenToKen\"],\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "UserBadResponse",
            "description": "<p>El usuario no ha podido crearse</p>"
          },
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "BaD-Response:",
            "description": "<p>HTTP/1.1 400 Bad Response { &quot;error&quot;: &quot;BadResponse&quot; }</p>"
          }
        ]
      }
    },
    "filename": "C:/_proyectos/cl_fullmec_fullmec/dev/src/Controller/Api/UsersController.php",
    "groupTitle": "Users"
  },
  {
    "type": "post",
    "url": "/api/users/recover_password",
    "title": "Recuperar contraseña",
    "version": "0.1.0",
    "name": "recover_password",
    "group": "Users",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>Correo electronico</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "success",
            "description": "<p>true/false.</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "data",
            "description": "<p>[token,message] token y mensaje de, se ha enviado un correo para recuperar la contraseña.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"Success\": true,\n   \"data\": [\"token\":\"tokenTokenToKen\", \"message\": \"Se ha enviado un correo a su mail para reestablecer la contraseña\"],\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "UserBadResponse",
            "description": "<p>Correo no encontrado</p>"
          },
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "BaD-Response:",
            "description": "<p>HTTP/1.1 401 Bad Response { &quot;error&quot;: &quot;BadResponse&quot; }</p>"
          }
        ]
      }
    },
    "filename": "C:/_proyectos/cl_fullmec_fullmec/dev/src/Controller/Api/UsersController.php",
    "groupTitle": "Users"
  },
  {
    "type": "get",
    "url": "/api/users/recover_password/hash_enviado_correo",
    "title": "Recuperar contraseña",
    "version": "0.1.0",
    "name": "recover_password",
    "group": "Users",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "hash",
            "description": "<p>Hash enviado al correo</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "success",
            "description": "<p>true/false.</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "data",
            "description": "<p>[token,message] aqui se depliega el form para ingresar las nuevas claves.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"Success\": true,\n   \"data\": [\"token\":\"tokenTokenToKen\", \"message\": \"Se ha enviado un correo a su mail para reestablecer la contraseña\"],\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "UserBadResponse",
            "description": "<p>Hash no encontrado</p>"
          },
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "BaD-Response:",
            "description": "<p>HTTP/1.1 401 Bad Response { &quot;error&quot;: &quot;BadResponse&quot; }</p>"
          }
        ]
      }
    },
    "filename": "C:/_proyectos/cl_fullmec_fullmec/dev/src/Controller/Api/UsersController.php",
    "groupTitle": "Users"
  },
  {
    "type": "post",
    "url": "/api/users/token",
    "title": "Iniciar session",
    "version": "0.1.0",
    "name": "token",
    "group": "Users",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>Correo electronico</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>Contraseña.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "success",
            "description": "<p>true/false.</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "data",
            "description": "<p>[token] el token se debe pasar en el headers Authorization Bearer {Your_Token} para poder moverse en la aplicacion.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"Success\": true,\n   \"data\": [\"token\":\"tokenTokenToKen\"],\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "UserBadResponse",
            "description": "<p>El usuario no ha podido crearse</p>"
          },
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "BaD-Response:",
            "description": "<p>HTTP/1.1 400 Bad Response { &quot;error&quot;: &quot;BadResponse&quot; }</p>"
          }
        ]
      }
    },
    "filename": "C:/_proyectos/cl_fullmec_fullmec/dev/src/Controller/Api/UsersController.php",
    "groupTitle": "Users"
  }
] });
