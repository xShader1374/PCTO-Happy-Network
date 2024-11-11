/// <reference path="../pb_data/types.d.ts" />
migrate((db) => {
  const dao = new Dao(db)
  const collection = dao.findCollectionByNameOrId("ozwdlg8re5zcssq")

  // remove
  collection.schema.removeField("24xay3mu")

  // add
  collection.schema.addField(new SchemaField({
    "system": false,
    "id": "75apt9qn",
    "name": "data_pubb",
    "type": "date",
    "required": false,
    "presentable": false,
    "unique": false,
    "options": {
      "min": "",
      "max": ""
    }
  }))

  return dao.saveCollection(collection)
}, (db) => {
  const dao = new Dao(db)
  const collection = dao.findCollectionByNameOrId("ozwdlg8re5zcssq")

  // add
  collection.schema.addField(new SchemaField({
    "system": false,
    "id": "24xay3mu",
    "name": "data_pubb",
    "type": "text",
    "required": false,
    "presentable": false,
    "unique": false,
    "options": {
      "min": null,
      "max": null,
      "pattern": ""
    }
  }))

  // remove
  collection.schema.removeField("75apt9qn")

  return dao.saveCollection(collection)
})
