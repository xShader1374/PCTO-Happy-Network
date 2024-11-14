/// <reference path="../pb_data/types.d.ts" />
migrate((db) => {
  const dao = new Dao(db)
  const collection = dao.findCollectionByNameOrId("ozwdlg8re5zcssq")

  // update
  collection.schema.addField(new SchemaField({
    "system": false,
    "id": "z1pmnls8",
    "name": "categoria",
    "type": "relation",
    "required": false,
    "presentable": false,
    "unique": false,
    "options": {
      "collectionId": "wlbayvnb3a9wxbs",
      "cascadeDelete": false,
      "minSelect": null,
      "maxSelect": null,
      "displayFields": null
    }
  }))

  return dao.saveCollection(collection)
}, (db) => {
  const dao = new Dao(db)
  const collection = dao.findCollectionByNameOrId("ozwdlg8re5zcssq")

  // update
  collection.schema.addField(new SchemaField({
    "system": false,
    "id": "z1pmnls8",
    "name": "categoria",
    "type": "relation",
    "required": false,
    "presentable": false,
    "unique": false,
    "options": {
      "collectionId": "wlbayvnb3a9wxbs",
      "cascadeDelete": false,
      "minSelect": null,
      "maxSelect": 1,
      "displayFields": null
    }
  }))

  return dao.saveCollection(collection)
})
