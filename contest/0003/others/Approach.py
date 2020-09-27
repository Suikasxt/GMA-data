a=[1]
tmp=1
MOD=int(1e9+7)
t=[[0,0,0] for x in range(100)]
f=[[0,0,0] for x in range(100)]
ans=0
for i in range(999999):
	tmp=(tmp*1706167+1534823)%MOD
	a.append(tmp)

'''for i in a:
	for j in a:
		for k in a:
			if (i!=j and i!=k and j!=k):
				tmp=i*j*k
				while tmp%10==0:
					tmp//=10
				if tmp>ans:
					ans=tmp
print(ans)'''
ans=0
for x in a:
	while(x%10==0):
		x//=10
	tmp=x
	j=0
	if x%2==0:
		while x%2==0:
			j+=1
			x//=2
		if t[j][0]<tmp:
			t[j][2]=t[j][1]
			t[j][1]=t[j][0]
			t[j][0]=tmp
		else:
			if t[j][1]<tmp:
				t[j][2]=t[j][1]
				t[j][1]=tmp
			else:
				if t[j][2]<tmp:
					t[j][2]=tmp
	else:
		while x%5==0:
			j+=1
			x//=5
		if f[j][0]<tmp:
			f[j][2]=f[j][1]
			f[j][1]=f[j][0]
			f[j][0]=tmp
		else:
			if f[j][1]<tmp:
				f[j][2]=f[j][1]
				f[j][1]=tmp
			else:
				if f[j][2]<tmp:
					f[j][2]=tmp
o=[]
for s in t:
	for i in s:
		if i>0:
			o.append(i)

for s in f:
	for i in s:
		if i>0:
			o.append(i)
n=len(o)
print(n)
for i in range(n):
	for j in range(i+1,n):
		for k in range(j+1,n):
			tmp=o[i]*o[j]*o[k]
			while tmp%10==0:
				tmp//=10
			if tmp>ans:
				ans=tmp
print(ans)