from django import forms
from .models import Table1
class RegisterForm(forms.ModelForm):
    Password=forms.CharField(widget=forms.PasswordInput,max_length=8,min_length=3)
    ConfirmPassword=forms.CharField(widget=forms.PasswordInput,max_length=8,min_length=3)
    class Meta():
        model=Table1
        fields='__all__'
class LoginForm(forms.ModelForm):
    Password=forms.CharField(widget=forms.PasswordInput, max_length=8,min_length=3)
    class Meta():
        model=Table1
        fields=('Email','Password')