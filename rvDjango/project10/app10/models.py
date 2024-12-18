from django.db import models
class Register(models.Model):
    Name=models.CharField(max_length=20)
    Age=models.IntegerField()
    Place=models.CharField(max_length=20)
    Email=models.CharField(max_length=20)
    Password=models.CharField(max_length=20)
# Create your models here.
