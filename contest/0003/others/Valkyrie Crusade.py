from decimal import *
getcontext().prec = 2000
n=1000
q=0.05
ans=Decimal(0)
tmp=Decimal(1)
f=[]
f.append(tmp)
for i in range(1,n+1):
	tmp*=Decimal(i)
	f.append(tmp)
def C(n,r):
	return f[n]/f[r]/f[n-r]
tmp=Decimal(-1)
u=Decimal(1)
for i in range(1,n+1):
	tmp*=Decimal(-1)
	u*=Decimal(1-q)
	ans+=tmp*Decimal(C(n,i))/Decimal(1-u)
print(ans)

_ans=Decimal(0)
for i in range(1,n):
	_ans+=Decimal(n-1)/Decimal(i)*2
print(_ans)
print(ans-_ans)