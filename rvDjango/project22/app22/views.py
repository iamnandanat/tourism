from django.shortcuts import render
from django.http import HttpResponse
# Create your views here.
def hello(request):
    return HttpResponse("Welcome to Django2")

def index(request):
    name='rejeth'
    return render(request,'index.html',{'datas':name})