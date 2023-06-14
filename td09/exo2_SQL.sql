-- Q01 --
select * from vin;
-- Q02 --
select cru, annee from vin;
-- Q03 --
select cru, annee from vin where annee = 1976;
-- Q04 --
select * from vin order by cru;
-- Q05 --
select distinct * from vin order by cru;
-- Q06 --
select * from vin where degre between 11 and 12;
-- Q07 --
select * from vin where annee = 1980 and cru like 'C%' order by degre;
-- Q08 --
select count(cru) from vin;
-- Q09 --
select count(distinct cru) from vin;
-- Q10 --
select avg(degre) from vin;
-- Q11 --
select max(degre) from vin;
-- Q12 --
select cru, annee, degre from vin where degre > (select avg(degre) from vin) order by degre, annee;
-- Q13 --
select * from producteur where prenom is null;
-- Q14 --
select region from producteur;
-- Q15 --
select distinct region from producteur order by region;
-- Q16 --
select nom, prenom from producteur where region 
not in ('Corse', 'Beaujolais', 'Bourgogne', 'Rhone')
order by nom, prenom
-- Q17 --
select region, count(*) from producteur group by region;
-- Q18 --
select sum(quantite) from recolte join vin on vin.degre = 12;
-- Q19 --
select producteur.nom, producteur.region, recolte.sum(quantité) from producteur 
join recolte on recolte.producteur_id = producteur.id
join vin on vin.cru = 'Etoile';
-- Q20 --
select count(*), region from producteur where region in ('Savoie', 'Jura')
group by region;
-- Q21 --
select nom, prenom from producteur join recolte
on producteur.id = recolte.producteur_id
group by nom, prenom
having count(distinct vin_id) >= 3;
-- Q22 --
alter table vin add bio boolean not null default false;
-- Q23 --
select cru, bio from vin;
-- Q24 --
update vin set bio = true where annee = 1980;
-- Q25 --
select cru, bio from vin where annee = 1980 group by bio;
-- Q26 --
insert into vin(id, anne, degre, bio)
values(1000, 'Champagne', 2000, 7, false);
-- Q27 --
select * from vin where id = 1000;
-- Q28 --
-- erreur : c'est le meme id --
-- Q29 --
select p1.id as id1, p1.nom as nom1, p2.id as id2, p2.nom as nom2, region
from prodcuteur p1, producteur p2
where region = 'Alsace' and p1.id < p2.id;
-- Q30 --
drop table vin; -- erreur --
drop database pinilan;