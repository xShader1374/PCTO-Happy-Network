/// <reference path="../pb_data/types.d.ts" />
migrate((db) => {
  const collection = new Collection({
    "id": "wlbayvnb3a9wxbs",
    "created": "2024-11-11 11:50:45.677Z",
    "updated": "2024-11-11 11:50:45.677Z",
    "name": "Categorie",
    "type": "base",
    "system": false,
    "schema": [
      {
        "system": false,
        "id": "s0y3ikp0",
        "name": "nome",
        "type": "text",
        "required": false,
        "presentable": false,
        "unique": false,
        "options": {
          "min": null,
          "max": null,
          "pattern": ""
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
  const collection = dao.findCollectionByNameOrId("wlbayvnb3a9wxbs");

  return dao.deleteCollection(collection);
})
