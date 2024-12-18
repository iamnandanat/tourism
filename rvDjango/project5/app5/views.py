from django.shortcuts import render
from django.http import HttpResponse
# Create your views here.
def hello(request):
    return HttpResponse('Welcome to Django')
def index(request):
    name='Rejth Vinod'
    return render(request,'index.html',{'intro':name})