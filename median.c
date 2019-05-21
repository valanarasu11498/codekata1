
#include <stdio.h>

int main()
{
    int a[20],i,t,j,mid,size;
    scanf("%d",&size);
     for(i=1;i<=size;i++)
    {   
        scanf("%d",&a[i]);
    }
    for(i=1;i<=size;i++)
    {   
        for(j=1;j<=size;j++)
        {
        if(a[i]<a[j])
        {
            t=a[i];
            a[i]=a[j];
            a[j]=t;
        }
        }
    }
    if(size%2==0)
    {   
        t=size/2;
        mid=a[t]+a[t+1];
        mid=mid/2;
    }
    else
    {
        t=size/2;
        mid=a[t+1];
    }
    printf("%d",mid);
    return 0;
}
