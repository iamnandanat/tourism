from django.db import models

# Create your models here.
class Table1(models.Model):
    Idno=models.CharField(max_length=10)
    Name=models.CharField(max_length=20)
    Age=models.IntegerField()
    Address=models.CharField(max_length=20)
    Email=models.EmailField()
    Password=models.CharField(max_length=10)