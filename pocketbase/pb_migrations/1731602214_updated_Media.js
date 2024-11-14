/// <reference path="../pb_data/types.d.ts" />
migrate((db) => {
  const dao = new Dao(db)
  const collection = dao.findCollectionByNameOrId("ozwdlg8re5zcssq")

  // add
  collection.schema.addField(new SchemaField({
    "system": false,
    "id": "dsdlhdrn",
    "name": "trailer_url",
    "type": "url",
    "required": false,
    "presentable": false,
    "unique": false,
    "options": {
      "exceptDomains": null,
      "onlyDomains": null
    }
  }))

  return dao.saveCollection(collection)
}, (db) => {
  const dao = new Dao(db)
  const collection = dao.findCollectionByNameOrId("ozwdlg8re5zcssq")

  // remove
  collection.schema.removeField("dsdlhdrn")

  return dao.saveCollection(collection)
})
