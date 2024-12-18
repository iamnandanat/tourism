from django.shortcuts import render
from django.http import HttpResponse
from .forms import RegisterForm
# Create your views here.
def hello(request):
    return HttpResponse("welcome to Django")
def index(request):
    name='content'
    return render(request,'index.html',{'datas':name})
def register(request):
    form=RegisterForm()
    return render(request,'register.html',{'form':form})