# php-poo

Projet pour voir l'héritage et les interfaces


## Récupérer le projet puis faire une classe Person qui hérite de Animal et qui aura comme propriété un lastName en string et une méthode speak(Person $person) qui va faire un echo de "hello {​​nom de la personne à qui on parle}​​, it's me {​​nom de la personne qui parle}​​"

    Créer une classe Fish qui aura une propriété public inWater en booléen initialisée à true et une méthode swim qui si inWater est true fera un echo du nom du fish pour dire qu'il nage et sinon fera un echo pour dire qu'il ne peut pas nager hors de l'eau
Redéfinir (override) la méthode breath dans le Fish pour faire que si le poisson est dans l'eau, alors il déclenche la méthode breath du parent sinon il fait un ptit echo pour dire qu'il va pas bien
### Exo avec du polymorphisme :


	
Créer une classe Zoo qui va avoir une propriété privée $animals de type array (vous pouvez même mettre en commentaire que ça sera un Animal[] )
	
Rajouter une méthode add(Animal $animal) qui va prendre l'animal en argument et le push dans le tableau
	
Créer une nouvelle propriété $guardian de type Person et modifier la méthode add pour faire que si l'animal donnée est une instance de Person, alors on le met pas dans la liste des animaux mais à la place on l'assigne à la propriété $guardian
	
Rajouter une méthode feedAnimals() qui va :
	* Vérifier si il y a une valeur dans $guardian, si non alors on echo un message qui dit qu'il n'y a pas de gardien de zoo
	* Faire un echo qui dit que le guardian fait son travail, avec son nom
	* Faire une boucle sur tous les animaux et déclencher leur méthode eat