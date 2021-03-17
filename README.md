# Mon apprentissage en symfony 

## Cheminement git commands

#### créattion et changement de branche 
git checkout -b nom_branche | le -b pour créer la branche et sans rien pour changer de branche 

#### sauvegarde en local  
git add . | selectionne tous les fichiers modifiés qui ont besoin d'etre sauvegardés 
git status |visualiser les fichiers selectionnés 
git commit -m "nom_commit" | sauvegarde en local les fichiers modifiés 

#### sauvegarde online sur github 
git push --set-upstream origin nom_branche |si c'est le premier push de la branche 
git push |pour envoyer sinon 

#### si je veux fusionner mon travail, j'ouvre une pull request sur github 
ma pull request devra etre acceptée par les autres pour que ma branche soit merge sur la branche principale
en attendant je peux continuer a travailler sur une autre branche

#### changement de branche 
git checkout dev | on retourne sur la branche principale
git pull | met a jour le repertoire sur lequel je suis avec les modifications possiblement effectiées par les autres 

#### une fois que la branche sur laquelle j'ai envoyée une pull request est merge par quelqu'un, je la supprime en local et en ligne 
git branch-D nom_branch| supprime la branche en local 
git push --delete origin nom_branch | suppression en ligne sur github 

## Commandes Symfony 
attention toutes les commades symfony se tapent dans le /api ,une fois qu'un branche est crée. 

bin/console pour se rappeler des commandes principales symfony et verifier les erreur de syntaxes. 
symfony server:start |lance le server symfony 

#### creation d'une entié
```bash
    git push 
```
