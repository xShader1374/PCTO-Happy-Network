/// <reference path="../pb_data/types.d.ts" />
migrate((db) => {
  const collection = new Collection({
    "id": "hjz1h7zauzfx7fk",
    "created": "2024-11-11 13:07:39.065Z",
    "updated": "2024-11-11 13:07:39.065Z",
    "name": "Episodi",
    "type": "base",
    "system": false,
    "schema": [
      {
        "system": false,
        "id": "2udugpx0",
        "name": "titolo",
        "type": "text",
        "required": false,
        "presentable": false,
        "unique": false,
        "options": {
          "min": null,
          "max": null,
          "pattern": ""
        }
      },
      {
        "system": false,
        "id": "hjc3s8oe",
        "name": "descrizione",
        "type": "text",
        "required": false,
        "presentable": false,
        "unique": false,
        "options": {
          "min": null,
          "max": null,
          "pattern": ""
        }
      },
      {
        "system": false,
        "id": "ozlrmce7",
        "name": "stagione",
        "type": "relation",
        "required": false,
        "presentable": false,
        "unique": false,
        "options": {
          "collectionId": "dt7lmeebssmg2sy",
          "cascadeDelete": false,
          "minSelect": null,
          "maxSelect": 1,
          "displayFields": null
        }
      }
    ],
    "indexes": [],
    "listRule": null,
    "viewRule": null,
    "createRule": null,
    "updateRule": null,
    "deleteRule": null,
    "options": {}
  });

  return Dao(db).saveCollection(collection);
}, (db) => {
  const dao = new Dao(db);
  const collection = dao.findCollectionByNameOrId("hjz1h7zauzfx7fk");

  return dao.deleteCollection(collection);
})
