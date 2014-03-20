Deployments
-----------

* id - Int - AI, PRIMARY, NOT NULL
* editor - Int - FK(Units)
* editorDepartment - Int - FK(Units)
* priority - Int(1) -
* longitude - Decimal(11, 8) -            (från -180 till 180)
* latitude - Decimal(10, 8) -                (från -90   till 90)
* policeNeeded - Bool -
* fireDepartmentNeeded - Bool -
* medicNeeded - Bool -
* armyNeeded - Bool -
* firstRevision - Int -
* nextRevision - Int -
* description - Text -
* Deployment-Images
* deployment_id - id - FK(Deployments)
* path - Varchar -
* department- Int(1) - FK(Units)
* uid- Int -FK(Units)


Units
-----

* longitude - Decimal(11, 8) -            (från -180 till 180)
* latitude - Decimal(10, 8) -                (från -90   till 90)
* department - Int(1) - NOT NULL
* uid - Int - NOT NULL
* numberOfMembers - Int - NOT NULL

UnitsOnDeployment
-----------------

* unitID - Int - FK(Units), NOT NULL
* deploymentID - Int - FK(Deployment), NOT NULL

Tags
----

* id - Int - NOT NULL, PRIMARY
* title - Varchar - NOT NULL
* description  - Varchar -

TagsOnDeployment
----------------

* tagID - Int - FK(Tags), NOT NULL
* deploymentID - Int - FK(Deployment), NOT NULL
