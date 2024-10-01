
// Importer le module MongoClient de mongodb
const { MongoClient } = require('mongodb');

// URL de connexion à MongoDB
const url = 'mongodb://localhost:27017'; // Si MongoDB tourne localement, sinon remplacer par l'URL correcte

// Nom de la base de données
const dbName = 'william';

// Créer une instance du client MongoDB
const client = new MongoClient(url, {
    useNewUrlParser: true, 
    useUnifiedTopology: true
});

// Fonction principale pour se connecter à MongoDB
async function connectToDatabase() {
    try {
        // Connexion au serveur MongoDB
        await client.connect();
        console.log("Connexion réussie à MongoDB");

        // Sélectionner la base de données
        const db = client.db(dbName);
        console.log(`Base de données sélectionnée : ${db.databaseName}`);

        // Ici, tu peux interagir avec la base de données (par ex. lire/écrire des documents)

    } catch (err) {
        console.error("Erreur lors de la connexion à MongoDB :", err);
    } finally {
        // Fermer la connexion une fois le traitement terminé
        await client.close();
        console.log("Connexion fermée");
    }
}

// Appeler la fonction de connexion
connectToDatabase();
