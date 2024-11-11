/// <reference path="../pb_data/types.d.ts" />
migrate((db) => {
  const collection = new Collection({
    "id": "dt7lmeebssmg2sy",
    "created": "2024-11-11 11:58:08.957Z",
    "updated": "2024-11-11 11:58:08.957Z",
    "name": "Stagioni",
    "type": "base",
    "system": false,
    "schema": [
      {
        "system": false,
        "id": "6x7nfdfx",
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
      },
      {
        "system": false,
        "id": "7guiiktb",
        "name": "n_episodi",
        "type": "number",
        "required": false,
        "presentable": false,
        "unique": false,
        "options": {
          "min": null,
          "max": null,
          "noDecimal": false
        }
      },
      {
        "system": false,
        "id": "ivxhzngz",
        "name": "serie_tv",
        "type": "relation",
        "required": false,
        "presentable": false,
        "unique": false,
        "options": {
          "collectionId": "ozwdlg8re5zcssq",
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
  const collection = dao.findCollectionByNameOrId("dt7lmeebssmg2sy");

  return dao.deleteCollection(collection);
})
